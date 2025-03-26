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
    protected $listeners = ['deleteItem'];
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
    public $active_assign_new_modal = 0;
    public $active_assign_new_per_day_modal = 0;
    public $active_assign_update_modal = 0;
    public $destination_wise_route_and_service = [];
    public $destination_wise_route = [];
    public $selected_routes = [];


    public $new_route = [];
    public $new_service = [];

    public $new_per_destination = [];
    public $new_per_day_service = [];
    
    public $edit_summary = [];
    public $update_summary = [];

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
        
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        $this->selectedDestinationName = $State->name;
        if(count($this->divisions)==0){
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->destination_wise_route_and_service  = $this->GetRouteAndService();
        $this->destination_wise_route  = $this->GetRoute($destination_id);
        $this->all_activities = $this->GetActivities($destination_id);
        $this->all_sightseeings = $this->GetSightseeings($destination_id);
        $this->all_cabs = $this->GetCabs($destination_id);
    }
    public function GetRouteAndService()
    {
        return RouteServiceSummary::with('destination', 'route', 'activities', 'sightseeings', 'cabs')
            ->where('destination_id', $this->selectedDestination)
            ->where('service_type', $this->service_type)
            ->orderBy('service_type', 'ASC')
            ->get();
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
            // if ($this->active_assign_new_modal) {
            //     $this->new_service = [
            //         'route'=>null,
            //         'selectedActivities' => [],
            //         'selectedSightseeings' => [],
            //         'selectedCabs' => [],
            //     ];
            // }
        $this->dispatch('resetCheckboxes');
    }
    public function OpenNewPerDayModal($value){
        $this->active_assign_new_per_day_modal = $value=="yes"?1:0;
        // if ($this->active_assign_new_per_day_modal) {
        //     $this->new_per_day_service = [
        //         'destination'=>null,
        //         'selectedActivities' => [],
        //         'selectedSightseeings' => [],
        //         'selectedCabs' => [],
        //     ];
        // }
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
        
      
        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if($this->active_tab==1){ // For Route Wise
             
                foreach($this->new_service as $key=>$item){
                    $route = DestinationWiseRoute::where('id', $item['route'])->first();
                
                    $existingData = RouteServiceSummary::where('route_id', $route->id)->where('destination_id', (int)$this->selectedDestination)->get()->count();
                    if($existingData==0){
                        if (count($item['selectedCabs']) == 0) {
                            session()->flash('new-route-error', 'Please choose at least one cab on this route ('.$route->route_name.')');
                            return; // Stop further execution
                        }
                    }
                    
                    $storeService = RouteServiceSummary::updateOrCreate(
                        [
                            'route_id' => $route->id,
                            'destination_id' => (int)$this->selectedDestination,
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
                    // if(count($item['selectedSightseeings'])>0){
                    //     foreach($item['selectedSightseeings'] as $s_key=>$s_item){
                    //         $storeSightseeing = ServiceWiseSightseeing::updateOrCreate([
                    //             'service_summary_id'=>$storeService->id,
                    //             'sightseeing_id'=>(int)$s_item,
                    //         ]);
                    //     }
                    // }

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
            $this->destination_wise_route_and_service  = $this->GetRouteAndService();
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('error', 'Error: ' . $e->getMessage());
            return redirect()->route('admin.route.all_services');
        }

        // Success message
        session()->flash('success', 'route point saved successfully!');
        $this->active_assign_new_modal = 0;
        $this->active_assign_new_per_day_modal = 0;
        $this->new_service = []; // Reset all sightseeings by setting the array to empty
    }

    public function submitEditSummary()
    {
        $this->resetErrorBag();
    
        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if($this->active_tab==1){ // For Route Wise
                  // For Create Service Wise Activities
                if(count($this->edit_summary['activities'])>0){
                    foreach($this->edit_summary['activities'] as $ack_key=>$ack_item){
                        if($ack_item['id']==false){
                            ServiceWiseActivity::where('service_summary_id', $ack_item['service_summary_id'])->where('activity_id', $ack_item['activity_id'])->delete();
                        }
                    }
                }

                  // For Create Service Wise sightseeings
                if(count($this->edit_summary['sightseeings'])>0){
                    foreach($this->edit_summary['sightseeings'] as $sight_key=>$sight_item){
                        if($sight_item['id']==false){
                            ServiceWiseSightseeing::where('service_summary_id', $sight_item['service_summary_id'])->where('sightseeing_id', $sight_item['sightseeing_id'])->delete();
                        }
                    }
                }

                // For Create Service Wise Cabs
                if(count($this->edit_summary['cabs'])>0){
                    foreach($this->edit_summary['cabs'] as $cab_key=>$cab_item){
                        if($cab_item['id']==false){
                            ServiceWiseCab::where('service_summary_id', $cab_item['service_summary_id'])->where('division_wise_cab_id', $cab_item['division_wise_cab_id'])->delete();
                        }
                    }
                }
            }elseif($this->active_tab==2){ //For Per Day
                // For Create Service Wise Activities
                if(count($this->edit_summary['activities'])>0){
                    foreach($this->edit_summary['activities'] as $ack_key=>$ack_item){
                        if($ack_item['id']==false){
                            ServiceWiseActivity::where('service_summary_id', $ack_item['service_summary_id'])->where('activity_id', $ack_item['activity_id'])->delete();
                        }
                    }
                }

                // For Create Service Wise Cabs
                if(count($this->edit_summary['cabs'])>0){
                    foreach($this->edit_summary['cabs'] as $cab_key=>$cab_item){
                        if($cab_item['id']==false){
                            ServiceWiseCab::where('service_summary_id', $cab_item['service_summary_id'])->where('division_wise_cab_id', $cab_item['division_wise_cab_id'])->delete();
                        }
                    }
                }
            }

            DB::commit(); // Commit transaction
            session()->flash('success', 'Data updated successfully!');
            $this->destination_wise_route_and_service  = $this->GetRouteAndService();
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('edit-route-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }

        // Success message
        session()->flash('success', 'Data updated successfully!');
        $this->active_assign_update_modal = 0;
        $this->reset(['edit_summary']);
    }
    public function GetSummaryById($id){
        $this->active_assign_update_modal = 1;
        $summary = RouteServiceSummary::with('destination', 'route', 'activities', 'activities.activity', 'sightseeings', 'sightseeings.sightseeing', 'cabs', 'cabs.divisionCab.cab')
        ->where('id', $id)
        ->first();
        $this->edit_summary = $summary->toArray();
        $this->resetValidation();
    }
  
    public function CloseEditModal(){
        $this->active_assign_update_modal = 0;
        unset($this->update_summary);
        unset($this->edit_summary);
    }
    public function DeleteRouteItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }

    public function deleteItem($itemId)
    {
        $route = RouteServiceSummary::find($itemId);
        if ($route) {
            $route->delete();
            $this->destination_wise_route_and_service  = $this->GetRouteAndService();
            session()->flash('success', 'Route deleted successfully!');
        } 
    }

    // New code
    public function TabChange($value,$type){
        $this->active_tab = $value;
        $this->service_type = $type;
        $this->destination_wise_route_and_service  = $this->GetRouteAndService();
    }
    public function GetRoute($destination_id){
        return DestinationWiseRoute::with('waypoints')->where('destination_id', $destination_id)
        // ->whereNotIn('id', $exsiting_service_summaries) // Missing -> fixed
        ->get();
    }
    public function GetActivities($destination_id){
       
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseActivity::whereIn('division_id', $divisions)->get();
    }
    public function GetSightseeings($destination_id){
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseSightseeing::whereIn('division_id', $divisions)->get();
    }
    public function GetCabs($destination_id){
        $divisions = City::where('state_id', $destination_id)->pluck('id')->toArray();
        return DivisionWiseCab::whereIn('division_id', $divisions)->get();
    }


    public function render()
    {
        return view('livewire.all-route-and-service');
    }
}

