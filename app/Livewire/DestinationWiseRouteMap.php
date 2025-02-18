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
    public $selected_routes = [];


    public $new_routes = []; // Holds dynamic route rows
    
    public $edit_routes = [];

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
        $this->addRoute(); // Start with one route
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        if(count($this->divisions)>0){
        //     $city= City::where('state_id', $destination_id)->where('status', 1)->orderBy('name', 'ASC')->first();
        //    if($city){
        //         $this->selectedDivision = $city->id;
        //         $this->selectedDivisionName =$city->name;
        //    }else{
        //      session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');
        //    }
          
        }else{
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->destination_wise_route  = $this->GetRoute();
    }
    public function GetRoute()
    {
        return DestinationWiseRoute::with('seasonType')
            ->where('destination_id', $this->selectedDestination)
            ->when($this->selected_season_type > 0, function ($query) {
                return $query->where('seasion_type_id', $this->selected_season_type);
            })
            ->when(!empty($this->selected_routes), function ($query) {
                return $query->whereIn('id', $this->selected_routes);
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
        $this->selected_routes = DestinationWiseRouteWaypoint::where('division_id', $value)->pluck('route_id')->toArray();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $this->destination_wise_route  = $this->GetRoute();
    }

    public function OpenNewRouteMapModal($value){
        $this->active_assign_new_modal = $value=="yes"?1:0;

        // Reset all new_routes fields
        if ($this->active_assign_new_modal) {
            $this->new_routes = []; // Reset all new_routes by setting the array to empty
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
    

    public function removeEditWayPoint($waypointIndex)
    {
        unset($this->edit_routes['waypoints'][$waypointIndex]);
        // Reindex array to fix Livewire reactivity issue
        $this->edit_routes['waypoints'] = array_values($this->edit_routes['waypoints']);
    }
    public function UpdateWayPoint(){

        if (!isset($this->edit_routes['waypoints'])) {
            $this->edit_routes['waypoints'] = [];
        }

        $this->edit_routes['waypoints'][] = [
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

    public function submitForm()
    {
        // dd($this->all());
        $this->resetErrorBag();
        if ($this->selected_season_type == 0) {
            session()->flash('new-route-error', 'Please choose a season type!');
            return; // Stop further execution
        }
        if(count($this->new_routes)>0){
            foreach ($this->new_routes as $index => $route) {
                $checkExisting = DestinationWiseRoute::where('route_name', $route['route_name'])->where('seasion_type_id', $this->selected_season_type)
                ->where('destination_id', $this->selectedDestination)
                ->first();
            
                if ($checkExisting) {
                    session()->flash('new-route-error', 'The route name "' . $route['route_name'] . '" already exists for this destination. Please choose another route name.');
                    return; // Stop further execution
                }
            
                if(count($route['waypoints'])==0){
                    session()->flash('new-route-error', 'Please choose atleast one waypoint. on this '.$route['route_name']);
                    return; // Stop further execution 
                }
            }
        }
       
        $this->validate([
            'new_routes.*.route_name' => 'required|string|max:255',
            'new_routes.*.waypoints' => 'required|array', // Ensures waypoints exist
            'new_routes.*.waypoints.*.point_name' => 'required|string|max:255',
            'new_routes.*.waypoints.*.division_id' => 'required',
        ], [
            'new_routes.*.route_name.required' => 'Please enter route name.',
            'new_routes.*.waypoints.required' => 'Waypoints are required.',
            'new_routes.*.waypoints.*.point_name.required' => 'please enter waypoint name.',
            'new_routes.*.waypoints.*.division_id.required' => 'Please choose the division.',
        ]);
        

        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if (count($this->new_routes)==0) {
                session()->flash('new-route-error', 'Please choose atleast one route point!');
                return; // Stop further execution
            }
        // Loop through route and save them to the database
       
            foreach ($this->new_routes as $index => $route) {
                // Save the route record
                $RouteRecord = DestinationWiseRoute::create([
                    'route_name' => $route['route_name'], // Ensure this key exists
                    'destination_id' => $this->selectedDestination, // Save 0 if empty
                    'seasion_type_id' => $this->selected_season_type, // Validate this is set
                    'total_distance_km' => $route['total_distance_km'], // Validate this is set
                    'total_travel_time' => $route['total_travel_time'], // Validate this is set
                ]);
        
                if(count($route['waypoints'])>0){
                    foreach($route['waypoints'] as $k=>$witem){
                        $waypont = DestinationWiseRouteWaypoint::create([
                            'route_id'=>$RouteRecord->id, 
                            'point_name'=>$witem['point_name'],
                            'division_id'=>$witem['division_id'], 
                            'sequence'=>$k+1, 
                            'distance_from_previous_km'=>$witem['distance_from_previous_km'], 
                            'travel_time_from_previous'=>$witem['travel_time_from_previous']
                        ]);
                    }
                }else{
                    session()->flash('new-route-error', 'Please choose atleast one waypoint. on this '.$route['route_name']);
                    return; // Stop further execution 
                }
            }
        
            DB::commit(); // Commit transaction
            session()->flash('success', 'route point saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('new-route-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }

        // Success message
        session()->flash('success', 'route point saved successfully!');
        $this->active_assign_new_modal = 0;
        $this->FilterRoutePointBySeasionType(0); //for All
        $this->new_routes = []; // Reset all sightseeings by setting the array to empty
        // If you need to initialize some fields with an empty template, you can add default values like this
       $this->addRoute();
    }

    public function submitEditForm()
    {
        // dd($this->edit_routes);
       
        $this->resetErrorBag();
        $checkExisting = DestinationWiseRoute::where('route_name', $this->edit_routes['route_name'])
                ->where('destination_id', $this->edit_routes['destination_id'])->where('seasion_type_id', $this->edit_routes['seasion_type_id'])->where('id', '!=', $this->edit_routes['id'])
                ->first();
            
        if ($checkExisting) {
            session()->flash('edit-route-error', 'The route name "' . $this->edit_routes['route_name'] . '" already exists for this destination. Please choose another route name.');
            return; // Stop further execution
        }
        if(count($this->edit_routes['waypoints'])==0){
            session()->flash('edit-route-error', 'Please choose atleast one waypoint. on this '.$this->edit_routes['route_name']);
            return; // Stop further execution 
        }
       
      // Validate the $edit_routes array
        $this->validate([
            'edit_routes.route_name' => 'required|string|max:255',
            'edit_routes.waypoints' => 'required|array', // Ensures waypoints exist
            'edit_routes.waypoints.*.point_name' => 'required|string|max:255',
            'edit_routes.waypoints.*.division_id' => 'required', // Unique ID
        ], [
            'edit_routes.route_name.required' => 'Please enter route name.',
            'edit_routes.waypoints.required' => 'Waypoints are required.',
            'edit_routes.waypoints.*.point_name.required' => 'Please enter the waypoint name.',
            'edit_routes.waypoints.*.division_id.required' => 'Please choose the division.',
        ]);

        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if ($this->edit_routes['seasion_type_id'] == 0) {
                session()->flash('edit-route-error', 'Please choose a season type!');
                return; // Stop further execution
            }

            if (count($this->edit_routes)==0) {
                session()->flash('edit-route-error', 'Please choose atleast one route point!');
                return; // Stop further execution
            }
            // Loop through route and save them to the database
       
           // Find the existing route record by ID
            $RouteRecord = DestinationWiseRoute::find($this->edit_routes['id']);

            if ($RouteRecord) {
                $RouteRecord->update([
                    'route_name' => $this->edit_routes['route_name'],
                    'destination_id' => $this->edit_routes['destination_id'], // Default to 0 if empty
                    'seasion_type_id' => $this->edit_routes['seasion_type_id'],
                    'total_distance_km' => $this->edit_routes['total_distance_km'],
                    'total_travel_time' => $this->edit_routes['total_travel_time'],
                ]);
            } else {
                // Handle case where the record doesn't exist
                session()->flash('edit-route-error', 'Route not found.');
            }
    
            if(count($this->edit_routes['waypoints'])>0){
                foreach ($this->edit_routes['waypoints'] as $index => $witem) {
                    // Check if the division exists for the given state
                    $divisionExists = City::where('state_id', $this->edit_routes['destination_id'])
                        ->where('id', $witem['division_id'])
                        ->exists();
                
                    if (!$divisionExists) {
                        $this->addError("edit_routes.waypoints.$index.division_id", "Please choose a valid division.");
                        continue; // Skip processing this waypoint if the division is invalid
                    }
                
                    // Check if the waypoint already exists
                    $waypoint = isset($witem['id']) ? DestinationWiseRouteWaypoint::find($witem['id']) : null;
                
                    if ($waypoint) {
                        // Update existing waypoint
                        $waypoint->update([
                            'route_id' => $RouteRecord->id,
                            'point_name' => $witem['point_name'],
                            'division_id' => $witem['division_id'],
                            'sequence' => $index + 1,
                            'distance_from_previous_km' => $witem['distance_from_previous_km'] ?: null,
                            'travel_time_from_previous' => $witem['travel_time_from_previous'] ?: null,
                        ]);
                    } else {
                        // Create new waypoint
                        DestinationWiseRouteWaypoint::create([
                            'route_id' => $RouteRecord->id,
                            'point_name' => $witem['point_name'],
                            'division_id' => $witem['division_id'],
                            'sequence' => $index + 1,
                            'distance_from_previous_km' => $witem['distance_from_previous_km'] ?: null,
                            'travel_time_from_previous' => $witem['travel_time_from_previous'] ?: null,
                        ]);
                    }
                }
                
            }else{
                session()->flash('edit-route-error', 'Please choose atleast one waypoint. on this '.$this->edit_routes['route_name']);
                return; // Stop further execution 
            }
        
            DB::commit(); // Commit transaction
            session()->flash('success', 'route point updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            // dd($e->getMessage());
            session()->flash('edit-route-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }

        // Success message
        session()->flash('success', 'route point saved successfully!');
        $this->active_assign_update_modal = 0;
        $this->FilterRoutePointBySeasionType(0); //for All
        $this->edit_routes = []; // Reset all sightseeings by setting the array to empty
        // If you need to initialize some fields with an empty template, you can add default values like this
    }
    
    public function EditRoute($id){
        $this->active_assign_update_modal = 1;
        $route = DestinationWiseRoute::with('waypoints')->find($id);
        $this->edit_routes = $route->toArray();
        $this->resetValidation();
    }

    public function CloseEditModal(){
        $this->active_assign_update_modal = 0;
        unset($this->edit_routes);
    }
    public function DeleteRouteItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }
    public function deleteItem($id)
    {
        $route = DestinationWiseRoute::find($id);
        if ($route) {
            $route->delete();
            $this->mount(); // Or call any method to refresh data
            session()->flash('success', 'Route deleted successfully!');
        } 
    }
    public function render()
    {
        return view('livewire.destination-wise-route-map');
    }
}
