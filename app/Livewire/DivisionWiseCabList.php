<?php

namespace App\Livewire;

use App\Models\Cab;
use App\Models\City;
use App\Models\State;
use App\Models\DivisionWiseCab;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DivisionWiseCabList extends Component
{
    public $desitinations =[];
    public $divisions =[];
    public $cabs =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $selected_season_type =1; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $division_wise_cabs = [];

    public $assign_season_type; // Must be public for validation
    public $assign_cab_id = [];

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)->orderBy('name', 'ASC')->first();
        $this->selectedDestinationName = $State->name;
        if($State->id){
            $this->getDestination($State->id);
        }
        $this->cabs = Cab::where('status', 1)->orderBy('title', 'ASC')->get();
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        if(count($this->divisions)>0){
            $city= City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->first();
            $this->selectedDivision = $city->id;
            $this->selectedDivisionName =$city->name;
        }else{
            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        $this->division_wise_cabs  = $this->GetCab();
    }
    public function GetCab(){
        return DivisionWiseCab::where('division_id', $this->selectedDivision)
        ->orderBy('cab_id', 'ASC')
        ->get();
    }
    public function FilterCabByDivision($value){
        $this->selectedDivision = $value; 
        $this->division_wise_cabs  = $this->GetCab();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function DeleteCabItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }
    public function deleteItem($id){
        $cabs = DivisionWiseCab::find($id);
        if ($cabs) {
            $cabs->delete(); // Deletes all matching records
            $this->division_wise_cabs  = $this->GetCab();
            session()->flash('success', 'Cab deleted successfully.');
        } else {
            session()->flash('error', 'Cab not found.');
        }
    }
    public function OpenNewCabModal($value){
        // $this->reset(['assign_season_type', 'assign_cab_id']);
        $this->active_assign_new_modal = $value=="yes"?1:0;
    }

    public function submitForm()
    {
        // Validate the form inputs
        $this->validate([
            // 'assign_season_type' => 'required',
            'assign_cab_id' => 'required|array|min:1', // Validate as an array with at least one selected item
        ], [
            // 'assign_season_type.required' => 'Please select a season type.',
            'assign_cab_id.required' => 'Please select at least one cab.',
            'assign_cab_id.min' => 'Please select at least one cab.',
        ]);
     

        // Save the data if no existing record is found
        // dd($this->selectedDivision);
        foreach ($this->assign_cab_id as $cab_id) {
            DivisionWiseCab::updateOrCreate(
                [
                    'division_id' => $this->selectedDivision,
                    'cab_id' => $cab_id,
                ],
                [   // Only put fields that may change or need updating
                    'updated_at' => now(),
                ]
            );
        }

        // $this->reset(['assign_cab_id', 'assign_season_type']);
        // Optionally, send feedback
        session()->flash('success', 'Data submitted successfully!');
        $this->division_wise_cabs  = $this->GetCab();
        $this->reset(['assign_cab_id']);
        $this->dispatch('FieldUncheck', ['class' => 'cab-input']);
        $this->active_assign_new_modal = 0;
        // $this->selected_season_type = $this->assign_season_type;
    }

    public function resetPage()
    {
        // Reset component state to the initial state
        $this->reset(); // Resets all public properties
        $this->mount(); // Optionally, reinitialize any logic from mount()
    }
    public function render()
    {
        return view('livewire.division-wise-cab-list');
    }
}
