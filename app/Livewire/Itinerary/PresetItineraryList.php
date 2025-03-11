<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\Itinerary;
use App\Models\Category;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\DB;

class PresetItineraryList extends Component
{
    public $desitinations =[];
    public $divisions =[];
    public $categories =[];
    public $selectedDestination = null;
    public $selectedCategory =null;
    public $active_assign_new_modal = 0;
    public $active_night_distribution = 0;
    public $day;
    public $night;
    public $night_sum =0;
    public $night_distribution;
    public $newPresetError = '';
    public $itinerary_journey = [];
    public $preset_itineraries = [];
    public $itinerary_journey_divisions = [];
    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $this->categories = Category::where('status', 1)->orderBy('name', 'ASC')->get();
        $this->preset_itineraries = $this->getItinerary();
    }

    public function getItinerary()
    {
        return Itinerary::query()
            ->when($this->selectedDestination, function ($query) {
                $query->where('destination_id', $this->selectedDestination); // Use '=' for exact match
            })
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function NewPresetItinerary($value){
        $this->day = "";
        $this->reset(['day', 'night', 'night_sum', 'night_distribution']);
        $this->active_assign_new_modal = $value=="yes"?1:0;
        $this->dispatch('refreshComponent');
    }
    public function getDestination($value){
        $this->selectedDestination = $value;
        $this->divisions= City::where('state_id', $value)->orderBy('name', 'ASC')->get();
        $this->active_night_distribution = 1;
        $this->preset_itineraries = $this->getItinerary();
    }
    public function GetCategory($value){
        $this->selectedCategory = $value;
        $this->active_night_distribution = 1;
    }
    public function validateDaysAndNights($value){

        if (!preg_match('/^\d+(\s\d+)*$/', $value)) {
            $this->newPresetError = 'Please enter a valid numeric value.';
            $this->reset(['itinerary_journey', 'itinerary_journey_divisions']);
            return;
        }
        if(!$this->selectedDestination){
            $this->newPresetError = 'Please select destination first.';
            return;
        }elseif(!$this->selectedCategory){
            $this->newPresetError = 'Please select category first.';
            return;
        }elseif ($this->day < $this->night) {
            $this->newPresetError = 'Days (D) must be greater than Nights (N).';
            $this->active_night_distribution = 0;
            $this->reset(['night_distribution']);
            return;
        } else {
            $this->newPresetError = "";
            $this->active_night_distribution = 1;
        }
    }
    public function updateJourneyDivision($index, $value){
        $this->itinerary_journey_divisions[$index] = $value;
    }

    public function validateNightDistribution(){
        if(!$this->selectedDestination){
            $this->newPresetError = 'Please select destination first.';
            return;
        }elseif(!$this->selectedCategory){
            $this->newPresetError = 'Please select category first.';
            return;
        }
        $cleanedValue = str_replace('+', ' ', $this->night_distribution);
         // Check if the cleaned value contains only numbers and spaces
        if (!preg_match('/^\d+(\s\d+)*$/', $cleanedValue)) {
            $this->newPresetError = 'Please enter a valid numeric value.';
            $this->reset(['itinerary_journey', 'itinerary_journey_divisions']);
            return;
        }
        $numbers = array_map('intval', explode(' ', $cleanedValue));
        $this->night_sum = array_sum($numbers);
        // Validate the total sum matches the expected night count
        if ($this->night != $this->night_sum) {
            $this->newPresetError = 'Value should be equal to ' . $this->night;
            $this->reset(['itinerary_journey', 'itinerary_journey_divisions']);
            return;
        }

        // If everything is correct, clear the error
        $this->itinerary_journey = $numbers;
        $this->newPresetError = null;
    }

    public function submitForm()
    {
        if(!$this->selectedDestination){
            $this->newPresetError = 'Please select destination first.';
            return;
        }elseif(!$this->selectedCategory){
            $this->newPresetError = 'Please select category first.';
            return;
        }elseif ($this->day < $this->night || $this->day==0) {
            $this->newPresetError = 'Days (D) must be greater than Nights (N).';
            $this->active_night_distribution = 0;
            $this->reset(['night_distribution']);
            return;
        }elseif (count($this->itinerary_journey)==0 || count($this->itinerary_journey_divisions)==0) {
            $this->newPresetError = 'Please fill the itinerary journey.';
            return;
        }
        DB::beginTransaction();
        try {
           // Convert arrays to string format
            $itinerary_journey = implode(',', $this->itinerary_journey);
            $itinerary_journey_divisions = implode(',', $this->itinerary_journey_divisions);
            $formattedString = CustomHelper::formatNightJourney($itinerary_journey, $itinerary_journey_divisions);
            // Find existing record or create a new one
            $itinerary_syntax = $this->day.'D/'.$this->night.'N';
            $create = Itinerary::updateOrCreate(
                [
                    'destination_id' => $this->selectedDestination, 
                    'hotel_category' => $this->selectedCategory,
                    'total_days' => $this->day,
                    'total_nights' => $this->night
                ], // Search Conditions (Ensuring uniqueness)
                [
                    'type' => 'preset',
                    'itinerary_journey' => $formattedString, // Corrected placement
                    'itinerary_syntax' => $itinerary_syntax,
                    'night_journey' => $itinerary_journey,
                    'divisions_journey' => $itinerary_journey_divisions
                ] // Data to update or insert
            );
            
    
            // Commit transaction if everything is successful
            DB::commit();
            $this->active_assign_new_modal = 0;
            $this->preset_itineraries = $this->getItinerary();
            $this->reset(['itinerary_journey', 'itinerary_journey_divisions']);
            session()->flash('success', 'Itinerary saved successfully!');
    
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback on error
            $this->newPresetError = $e->getMessage();
            // session()->flash('error', 'Failed to save itinerary: ' . $e->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.itinerary.preset-itinerary-list');
    }
}
