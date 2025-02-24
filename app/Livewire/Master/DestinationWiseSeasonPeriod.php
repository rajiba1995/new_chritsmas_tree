<?php

namespace App\Livewire\Master;

use Livewire\Component;
use App\Models\State;
use App\Models\SeasionType;
use App\Models\DestinationSeasonPeriod;
use App\Helpers\CustomHelper;

class DestinationWiseSeasonPeriod extends Component
{
    public $keyword="";
    public $destinations;
    public $season_types;
    public $selected_destination;
    public $modal_activity = 0;
    public $selected_season_period = [];
    public $update_data = [];

    public function mount(){
        $this->season_types = SeasionType::where('status',1)->orderBy('position','ASC')->get();
        $this->loadDestinations();
    }
    public function loadDestinations() {
        $this->destinations = State::with('seasonPeriod')
            ->where('status', 1)
            ->where('country_code_id', 2)
            ->where('name', 'like', '%' . $this->keyword . '%')  // Fixed the LIKE condition
            ->orderBy('name', 'ASC')
            ->get();
    }
    
    // Optional: Auto-update destinations when keyword changes
    public function search() {
        $this->loadDestinations();
    }
    public function resetSearch(){
        $this->reset(['selected_season_period','update_data', 'keyword']);
        $this->loadDestinations();
        $this->dispatch('clearSearchInput');
    }
    public function ShowItemModal($item_id){    
        $this->modal_activity = $this->modal_activity==0?1:0;
        $this->selected_destination = $item_id;
        foreach($this->season_types as $k=> $type){
            $season_wise_date = CustomHelper::DestinationWiseSeasonDate($type->id,$this->selected_destination);
            $this->update_data[$k]['title'] = $type->title;
            $this->update_data[$k]['type'] = $type->id;
            $this->update_data[$k]['start_date'] = $season_wise_date?date('Y-m-d',strtotime(date('Y-').$season_wise_date->start_date)):"";
            $this->update_data[$k]['end_date'] = $season_wise_date?date('Y-m-d',strtotime(date('Y-').$season_wise_date->end_date)):"";
        }
        $this->selected_season_period = DestinationSeasonPeriod::where('destination_id',$item_id)->orderBy('id', 'ASC')->get();
    }

    public function CloseItemModal(){
        $this->modal_activity = $this->modal_activity==0?1:0;
        $this->reset(['selected_season_period','update_data']);
    }
    public function ResetItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }

    public function deleteItem($itemId)
    {
        $data = DestinationSeasonPeriod::where('destination_id',$itemId)->delete();
        if ($data) {
            $this->mount(); // Or call any method to refresh data
            session()->flash('success', 'Items deleted successfully!');
        } 
    }
    public function submitEditForm()
    {
        $this->validate([
            'update_data.*.type' => 'required|integer',
            'update_data.*.start_date' => 'required|date',
            'update_data.*.end_date' => 'required|date|after_or_equal:update_data.*.start_date',
        ], [
            'update_data.*.type.required' => 'The season type is required.',
            'update_data.*.type.integer' => 'The season type must be a valid number.',
            'update_data.*.start_date.required' => 'The start date is required.',
            'update_data.*.start_date.date' => 'The start date must be a valid date.',
            'update_data.*.end_date.required' => 'The end date is required.',
            'update_data.*.end_date.date' => 'The end date must be a valid date.',
            'update_data.*.end_date.after_or_equal' => 'The end date must be after or equal to the start date.',
        ]);
    
        // Ensure no duplicate or overlapping date ranges
        $dates = [];
    
        foreach ($this->update_data as $season) {
            $start = $season['start_date'];
            $end = $season['end_date'];
    
            foreach ($dates as $existing) {
                if (
                    ($start >= $existing['start_date'] && $start <= $existing['end_date']) || 
                    ($end >= $existing['start_date'] && $end <= $existing['end_date']) ||
                    ($start <= $existing['start_date'] && $end >= $existing['end_date']) // Fully overlaps
                ) {
                    session()->flash('new-update-error', "Date range conflict: {$season['title']} overlaps with another season.");
                    return;
                }
            }
    
            $dates[] = ['start_date' => $start, 'end_date' => $end];
        }
    
        // If validation passes, save the data
        foreach ($this->update_data as $season) {
            DestinationSeasonPeriod::updateOrCreate(
                ['destination_id' => $this->selected_destination, 'season_type_id' => $season['type']],
                ['start_date' => date('m-d', strtotime($season['start_date'])), 'end_date' => date('m-d', strtotime($season['end_date']))]
            );
        }
        $this->CloseItemModal();
        session()->flash('success', 'Season dates updated successfully!');
    }
    
    public function render()
    {   
        return view('livewire.master.destination-wise-season-period');
    }
}
