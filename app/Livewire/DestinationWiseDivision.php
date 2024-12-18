<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Repositories\CommonRepository;
use App\Models\City;

class DestinationWiseDivision extends Component
{
    public $destinations;
    public $divisions = [];
    public $selectedDestination = null;
    public $selectedDivision = null;
    public $oldDivision = null;
    public $oldDestination = null;

    protected $commonRepository;

    public function mount(CommonRepository $commonRepository, $oldDivision = null, $oldDestination = null)
    {
        $this->commonRepository = $commonRepository;
        $this->destinations = $this->commonRepository->getAllActiveState();
        $this->divisions = City::where('status',1)->where('id', $oldDivision)->pluck('name', 'id')
            ->toArray();
        $this->selectedDivision = $oldDivision ?$oldDivision: null;
        $this->selectedDestination = $oldDestination ?$oldDestination: null;
    }

    public function loadDivisions($destinationId)
    {
        $this->divisions = City::where('state_id', $destinationId)
            ->pluck('name', 'id')
            ->toArray(); // Convert to array for the dropdown
        $this->selectedDivision = null; // Reset the division selection
    }

    public function render()
    {
        return view('livewire.destination-wise-division');
    }
}

