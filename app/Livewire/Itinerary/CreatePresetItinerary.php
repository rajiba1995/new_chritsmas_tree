<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\Category;

class CreatePresetItinerary extends Component
{
    public $destinationId;
    public $categoryId;
    public $mainBanner;
    public $destinationName;
    public $categoryName;
    public $day;
    public $night;
    public $errorMessage = '';
    public function mount($destinationId, $categoryId){
        $destinationExists = State::find($destinationId);
        $categoryExists = Category::where('id', $categoryId)->first();
        $this->destinationName = $destinationExists->name;
        $this->categoryName = $categoryExists->name;
        $this->destinationId = $destinationId;
        $this->categoryId = $categoryId;
        // $this->mainBanner = ItineraryBanner::where('destination_id', $destinationId)->get();
    }
    public function render()
    {
        return view('livewire.itinerary.create-preset-itinerary');
    }

   
}
