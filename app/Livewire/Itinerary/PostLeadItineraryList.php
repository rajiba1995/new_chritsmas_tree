<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\Itinerary;
use App\Models\Category;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\DB;
class PostLeadItineraryList extends Component
{
    public $desitinations =[];
    public $divisions =[];
    public $categories =[];
    public $selectedDestination = null;
    public $selectedCategory =null;
    public $search ="";
    public $selectedType ='post_inquiry';
    public $post_lead_itineraries = [];
    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $this->categories = Category::where('status', 1)->orderBy('name', 'ASC')->get();
        $this->post_lead_itineraries = $this->getItinerary();
    }

    public function getItinerary()
    {
        return Itinerary::query()
            ->when($this->selectedDestination, function ($query) {
                $query->where('destination_id', $this->selectedDestination); // Use '=' for exact match
            })
            ->when($this->selectedCategory, function ($query) {
                $query->where('hotel_category', $this->selectedCategory); // Use '=' for exact match
            })
            ->when($this->selectedType, function ($query) {
                $query->where('type', $this->selectedType); // Use '=' for exact match
            })
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('itinerary_syntax', 'like', "%{$this->search}%")
                      ->orWhere('itinerary_journey', 'like', "%{$this->search}%")
                      ->orWhere('type', 'like', "%{$this->search}%");
                });
            })
            // ->orderBy('id', 'DESC')
            ->orderBy('total_days', 'DESC')
            ->get();
    }

    public function getDestination($value){
        $this->selectedDestination = $value;
        $this->divisions= City::where('state_id', $value)->orderBy('name', 'ASC')->get();
        $this->post_lead_itineraries = $this->getItinerary();
    }
    public function GetCategory($value){
        $this->selectedCategory = $value;
        $this->post_lead_itineraries = $this->getItinerary();
    }
    // public function filterType($value){
    //     $this->selectedType = $value;
    //     $this->post_lead_itineraries = $this->getItinerary();
    // }

    public function QuickSearch($value){
        $this->search = $value;
        $this->post_lead_itineraries = $this->getItinerary();
    }

    public function render()
    {
        return view('livewire.itinerary.post-lead-itinerary-list');
    }
}
