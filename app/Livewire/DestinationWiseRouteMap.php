<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\State;
use App\Models\DestinationWiseRoute;
use App\Models\DestinationWiseRouteWaypoint;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class DestinationWiseRouteMap extends Component
{
    use WithFileUploads;
    public $desitinations =[];
    public $divisions =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $seasion_types = [];
    public $selected_season_type =0; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $active_assign_update_modal = 0;
    public $destination_wise_route = [];


    public $new_routes = []; // Holds dynamic activity rows
    public $files = []; // Holds uploaded files for each activity
    
    public $edit_sightseeings = [];
    public $update_files = []; // Holds uploaded files for each activity

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)
        ->orderBy('name', 'ASC');
        
        if ($this->selectedDestination) {
            $State->where('id', $this->selectedDestination);
        }
        
        $State = $State->first();
    
        if($State->id){
            $this->selectedDestinationName = $State->name;
            $this->getDestination($State->id);
        }
        $this->seasion_types = DB::table('seasion_types')->where('status', 1)->orderBy('title', 'ASC')->get();
        $this->addRoute(); // Start with one activity
        $this->files = collect();
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        if(count($this->divisions)>0){
            $city= City::where('state_id', $destination_id)->where('status', 1)->orderBy('name', 'ASC')->first();
           if($city){
                $this->selectedDivision = $city->id;
                $this->selectedDivisionName =$city->name;
           }else{
             session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');
           }
          
        }else{
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->destination_wise_route  = $this->GetRoute();
    }
    public function GetRoute(){
        return DestinationWiseRoute::with('seasonType')->where('destination_id', $this->selectedDestination)
        ->when($this->selected_season_type > 0, function ($query) {
            return $query->where('seasion_type_id', $this->selected_season_type);
        })
        ->orderBy('route_name', 'ASC')
        ->orderBy('seasion_type_id', 'ASC')
        ->get();
    }
    public function FilterRoutePointBySeasionType($value){
        $this->selected_season_type = $value; 
        $this->destination_wise_route  = $this->GetRoute();
    }
    public function UpdateSeasonType($value){
        $this->edit_sightseeings['seasion_type_id'] = $value; 
    }
    public function FilterRouteWayByDivision($value){
        $this->selectedDivision = $value; 
        $this->destination_wise_route  = $this->GetRoute();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function OpenNewRouteMapModal($value){
        $this->active_assign_new_modal = $value=="yes"?1:0;

        // Reset all new_routes fields
        if ($this->active_assign_new_modal) {
            $this->new_routes = []; // Reset all new_routes by setting the array to empty

            // If you need to initialize some fields with an empty template, you can add default values like this
            $this->new_routes[] = [
                'name' => '',
                'ticket_price' => '',
                'files' => []
            ];
            unset($this->new_routes[0]);
            unset($this->files[0]);
        }
    }

    public function addRoute(){
        $this->new_routes[] = [
            'route_name' => '',
            'total_distance_km' => '',
            'total_travel_time' => '',
            'waypoints' => [
            ]
        ];
    }
    
    public function removeRoute($index){
        unset($this->new_routes[$index]);
        $this->new_routes = array_values($this->new_routes);
        session()->flash('success', "Removing route with index: " . $index);
    }

    public function addWayPoint($routeIndex){

        if (!isset($this->new_routes[$routeIndex]['waypoints'])) {
            $this->new_routes[$routeIndex]['waypoints'] = [];
        }

        $this->new_routes[$routeIndex]['waypoints'][] = [
            'point_name' => '',
            'division_id' => '',
            'distance_from_previous_km' => '',
            'travel_time_from_previous' => '',
        ];
    }
    

    public function removeWayPoint($routeIndex, $waypointIndex)
    {
        unset($this->new_routes[$routeIndex]['waypoints'][$waypointIndex]);
        // Reindex array to fix Livewire reactivity issue
        $this->new_routes[$routeIndex]['waypoints'] = array_values($this->new_routes[$routeIndex]['waypoints']);
    }

    public function render()
    {
        return view('livewire.destination-wise-route-map');
    }
}
