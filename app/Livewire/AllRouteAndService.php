<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\State;
use App\Models\DestinationWiseRoute;
use App\Models\DestinationWiseRouteWaypoint;
use App\Models\DivisionWiseActivity;
use App\Models\DivisionWiseSightseeing;
use App\Models\DivisionWiseCab;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\RouteServiceSummary;
use App\Models\ServiceWiseActivity;
use App\Models\ServiceWiseSightseeing;
use App\Models\ServiceWiseCab;

class AllRouteAndService extends Component
{
    public $active_tab = 1;
    public $service_type = 'Route Wise';
    public $all_activities =[];
    public $all_sightseeings =[];
    public $all_cabs =[];

    public $desitinations =[];
    public $divisions =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $seasion_types = [];
    public $selected_season_type =0; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $active_assign_new_per_day_modal = 0;
    public $active_assign_update_modal = 0;
    public $destination_wise_route_and_service = [];
    public $selected_routes = [];


    public $new_route = [];
    public $new_service = [];

    public $new_per_destination = [];
    public $new_per_day_service = [];
    
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
        
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        if(count($this->divisions)==0){
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->destination_wise_route_and_service  = $this->GetRouteAndService();
        $this->all_activities = $this->GetActivities($destination_id);
        $this->all_sightseeings = $this->GetSightseeings($destination_id);
        $this->all_cabs = $this->GetCabs($destination_id);
    }
    public function GetRouteAndService()
    {
        return RouteServiceSummary::with('seasonType', 'destination', 'route', 'activities', 'sightseeings', 'cabs')
            ->where('destination_id', $this->selectedDestination)
            ->where('service_type', $this->service_type)
            ->when($this->selected_season_type > 0, function ($query) {
                return $query->where('seasion_type_id', $this->selected_season_type);
            })
            ->orderBy('seasion_type_id', 'ASC')
            ->orderBy('service_type', 'ASC')
            ->get();
    }
    public function FilterRoutePointBySeasionType($value){
        $this->selected_season_type = $value; 
        $this->destination_wise_route_and_service  = $this->GetRouteAndService();
        $this->reset(['new_per_destination']);
        $this->reset(['new_per_day_service']);

        $this->reset(['new_route']);
        $this->reset(['new_service']);
        $this->dispatch('resetCheckboxes');
        
        $this->all_activities = $this->GetActivities($this->selectedDestination);
        $this->all_sightseeings =  $this->GetSightseeings($this->selectedDestination);
        $this->all_cabs =  $this->GetCabs($this->selectedDestination);
    }
    public function UpdateSeasonType($value){
        $this->edit_sightseeings['seasion_type_id'] = $value; 
    }
    public function FilterRouteWayByDivision($value){
        $this->selectedDivision = $value; 
        $this->selected_routes = DestinationWiseRouteWaypoint::where('division_id', $value)->pluck('route_id')->toArray();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $this->destination_wise_route_and_service  = $this->GetRouteAndService();
    }

    public function OpenNewRouteWiseServiceModal($value){
            $this->active_assign_new_modal = $value=="yes"?1:0;
            // Reset all new_service fields
            if ($this->active_assign_new_modal) {
                $this->new_service = [
                    'route'=>null,
                    'selectedActivities' => [],
                    'selectedSightseeings' => [],
                    'selectedCabs' => [],
                ];
            }
        $this->dispatch('resetCheckboxes');
    }
    public function OpenNewPerDayModal($value){
        $this->active_assign_new_per_day_modal = $value=="yes"?1:0;
        if ($this->active_assign_new_per_day_modal) {
            $this->new_per_day_service = [
                'destination'=>null,
                'selectedActivities' => [],
                'selectedSightseeings' => [],
                'selectedCabs' => [],
            ];
        }
        $this->dispatch('resetCheckboxes');
    }


    public function AddedNewRoute($isChecked,$value, $key){
        if($this->active_tab==1){
            if ($isChecked) {  // If checkbox is checked
                if (!isset($this->new_service[$key])) {
                    $this->new_service[$key] = [
                       'route' => (string) $value,
                        'selectedActivities' => [],
                        'selectedSightseeings' => [],
                        'selectedCabs' => [],
                    ];
                }
            } else {  // If checkbox is unchecked
                $this->reset(['new_service']);
                $this->dispatch('resetCheckboxes');
            }
        }
        if($this->active_tab==2){
            if ($isChecked) {  // If checkbox is checked
                if (!isset($this->new_per_day_service[$key])) {
                    $this->new_per_day_service[$key] = [
                        'destination' => (int) $value,
                        'selectedActivities' => [],
                        'selectedSightseeings' => [],
                        'selectedCabs' => [],
                    ];
                }
            } else {  // If checkbox is unchecked
                $this->reset(['new_per_day_service']);
                $this->dispatch('resetCheckboxes');
            }
        }
        
    }
    
    public function submitNewService()
    {
        // dd($this->all());
        $this->resetErrorBag();
        if($this->active_tab==1){ // For Route Wise
            if (count($this->new_service) == 0) {
                session()->flash('new-route-error', 'Please choose at least one route before submitting.');
                return; // Stop further execution
            }
        }elseif($this->active_tab==2){ //For Per Day
            if (count($this->new_per_day_service) == 0) {
                session()->flash('new-route-error', 'Please choose at least one item before submitting.');
                return; // Stop further execution
            }
        }
        
        if (!$this->selectedDestination) {
            session()->flash('new-route-error', 'Please choose a destination!');
            return; // Stop further execution
        }
        if ($this->selected_season_type == 0) {
            session()->flash('new-route-error', 'Please choose a season type!');
            return; // Stop further execution
        }
        
    
        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if($this->active_tab==1){ // For Route Wise
                foreach($this->new_service as $key=>$item){
                    $route = DestinationWiseRoute::where('id', $item['route'])->first();
                    if (count($item['selectedCabs']) == 0) {
                        session()->flash('new-route-error', 'Please choose at least one cab on this route ('.$route->route_name.')');
                        return; // Stop further execution
                    }
                    $storeService = RouteServiceSummary::updateOrCreate(
                        [
                            'route_id' => $route->id,
                            'destination_id' => (int)$this->selectedDestination,
                            'seasion_type_id' => $this->selected_season_type,
                        ],
                        [
                            'service_type' => $this->service_type,
                            'division_id' => $this->selectedDivision,
                        ]
                    );

                    // For Create Service Wise Activities
                    if(count($item['selectedActivities'])>0){
                        foreach($item['selectedActivities'] as $ack_key=>$ack_item){
                            $storeActivity = ServiceWiseActivity::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'activity_id'=>(int)$ack_item,
                            ]);
                        }
                    }

                    // For Create Service Wise Sightseeings
                    if(count($item['selectedSightseeings'])>0){
                        foreach($item['selectedSightseeings'] as $s_key=>$s_item){
                            $storeSightseeing = ServiceWiseSightseeing::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'sightseeing_id'=>(int)$s_item,
                            ]);
                        }
                    }

                    // For Create Service Wise Cabs
                    if(count($item['selectedCabs'])>0){
                        foreach($item['selectedCabs'] as $c_key=>$c_item){
                            $storeCabs = ServiceWiseCab::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'division_wise_cab_id'=>(int)$c_item,
                            ]);
                        }
                    }
                
                }
            }elseif($this->active_tab==2){ //For Per Day
                foreach($this->new_per_day_service as $key=>$item){
                    $storeService = RouteServiceSummary::updateOrCreate(
                        [
                            'service_type' =>$this->service_type,
                            'seasion_type_id'=>$this->selected_season_type,
                            'destination_id'=>(int)$this->selectedDestination
                        ],[
                            'division_id'=>$this->selectedDivision
                            ]
                        );

                    // For Create Service Wise Activities
                    if(count($item['selectedActivities'])>0){
                        foreach($item['selectedActivities'] as $ack_key=>$ack_item){
                            $storeActivity = ServiceWiseActivity::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'activity_id'=>(int)$ack_item,
                            ]);
                        }
                    }

                    // For Create Service Wise Sightseeings
                    if(count($item['selectedSightseeings'])>0){
                        foreach($item['selectedSightseeings'] as $s_key=>$s_item){
                            $storeSightseeing = ServiceWiseSightseeing::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'sightseeing_id'=>(int)$s_item,
                            ]);
                        }
                    }

                    // For Create Service Wise Cabs
                    if(count($item['selectedCabs'])>0){
                        foreach($item['selectedCabs'] as $c_key=>$c_item){
                            $storeCabs = ServiceWiseCab::updateOrCreate([
                                'service_summary_id'=>$storeService->id,
                                'division_wise_cab_id'=>(int)$c_item,
                            ]);
                        }
                    }
                
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
        $this->active_assign_new_per_day_modal = 0;
        $this->FilterRoutePointBySeasionType(0); //for All
        $this->new_service = []; // Reset all sightseeings by setting the array to empty
        // If you need to initialize some fields with an empty template, you can add default values like this
    }

    public function submitEditForm()
    {
        // dd($this->edit_routes);
       
        $this->resetErrorBag();
        if(count($this->edit_routes['waypoints'])==0){
            session()->flash('new-route-error', 'Please choose atleast one waypoint. on this '.$this->edit_routes['route_name']);
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
        $route = DestinationWiseRoute::find($id);
        if ($route) {
            $route->delete();
            $this->mount(); // Or call any method to refresh data
            session()->flash('success', 'Route deleted successfully!');
        } 
    }

    // New code
    public function TabChange($value,$type){
        $this->active_tab = $value;
        $this->service_type = $type;
    }

    public function GetActivities($destination_id){
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseActivity::whereIn('division_id', $divisions)->where('seasion_type_id', $this->selected_season_type)->get();
    }
    public function GetSightseeings($destination_id){
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseSightseeing::whereIn('division_id', $divisions)->where('seasion_type_id', $this->selected_season_type)->get();
    }
    public function GetCabs($destination_id){
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseCab::whereIn('division_id', $divisions)->where('seasion_type_id', $this->selected_season_type)->get();
    }


    public function render()
    {
        return view('livewire.all-route-and-service');
    }
}

