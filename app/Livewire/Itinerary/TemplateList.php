<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\ItineraryTemplate;
use App\Models\ItineraryTemplateDetail;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\DB;

class TemplateList extends Component
{
    public $desitinations =[];
    public $itinerary_templates =[];
    public $selectedDestination = null;
    public $search ="";
    public $active_assign_new_modal = 0;
    public $newPresetError = '';
    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function getItineraryTemplate()
    {
        return ItineraryTemplate::query()
            ->when($this->selectedDestination, function ($query) {
                $query->where('destination_id', $this->selectedDestination); // Use '=' for exact match
            })
            ->orderBy('destination_id', 'DESC')
            ->get();
    }

    public function ResetData(){
        $this->reset(['selectedDestination']);
    }
    
    public function getDestination($value){
        $this->selectedDestination = $value;
        $create = ItineraryTemplate::updateOrCreate(
            [ 'destination_id' => $this->selectedDestination ], // Search condition
            [ 'updated_at' => now() ] // Data to update (ensuring some change)
        );
    }

    
    public function render()
    {
        $this->itinerary_templates = $this->getItineraryTemplate();
        return view('livewire.itinerary.template-list');
    }
}
