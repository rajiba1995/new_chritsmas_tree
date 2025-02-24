<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\Category;

class CreatePresetItinerary extends Component
{
    public $destinationId;
    public $categoryId;
    public $destinationName;
    public $categoryName;
    public function mount($destinationId, $categoryId){
        $destinationExists = State::find($destinationId);
        $categoryExists = Category::where('id', $categoryId)->first();
        $this->destinationName = $destinationExists->name;
        $this->categoryName = $categoryExists->name;
        $this->destinationId = $destinationId;
        $this->categoryId = $categoryId;
    }
    public function render()
    {
        return view('livewire.itinerary.create-preset-itinerary');
    }
}
