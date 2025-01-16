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
    public $seasion_types = [];
    public $active_assign_new_modal = 0;
    public $assign_season_type; // Must be public for validation
    public $assign_cab_id = [];

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)->orderBy('name', 'ASC')->first();
        $this->selectedDestination = $State->id;
        $this->selectedDestinationName = $State->name;
        if($this->selectedDestination){
            $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
            if($this->divisions){
                $city= City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->first();
                $this->selectedDivision = $city->id;
                $this->selectedDivisionName =$city->name;
            }
        }
        $this->seasion_types = DB::table('seasion_types')->where('status', 1)->orderBy('title', 'ASC')->get();
        $this->cabs = Cab::where('status', 1)->orderBy('title', 'ASC')->get();
    }

    public function OpenNewCabModal($value){
        $this->reset(['assign_season_type', 'assign_cab_id']);
        $this->active_assign_new_modal = $value=="yes"?1:0;
    }

    public function submitForm()
    {
        // Validate the form inputs
        $this->validate([
            'assign_season_type' => 'required',
            'assign_cab_id' => 'required|array|min:1', // Validate as an array with at least one selected item
        ], [
            'assign_season_type.required' => 'Please select a season type.',
            'assign_cab_id.required' => 'Please select at least one cab.',
            'assign_cab_id.min' => 'Please select at least one cab.',
        ]);
     
        // Check if the combination of season type and cab(s) already exists in the division_wise_cabs table
        foreach ($this->assign_cab_id as $cab_id) {
            $existingRecord = DivisionWiseCab::where('division_id', $this->selectedDivision)
                                            ->where('seasion_type_id', $this->assign_season_type)
                                            ->where('cab_id', $cab_id)
                                            ->exists(); // Check if the record exists

            // If any record exists, return with a message
            if ($existingRecord) {
                session()->flash('assign_error', 'This combination already exists.');
                return; // Prevent further processing if record exists
            }
        }

        // Save the data if no existing record is found
        foreach ($this->assign_cab_id as $cab_id) {
            DivisionWiseCab::create([
                'division_id' => $this->selectedDivision,
                'seasion_type_id' => $this->assign_season_type,
                'cab_id' => $cab_id,
            ]);
        }

        $this->reset(['assign_cab_id', 'assign_season_type']);
        // Optionally, send feedback
        session()->flash('success', 'Data submitted successfully!');
        $this->active_assign_new_modal = 0;
    }

    public function render()
    {
        return view('livewire.division-wise-cab-list');
    }
}
