<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
                <div class="mt-2 mx-2 mb-1">
                    @if (session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {!! session('error') !!}
                        </div>
                    @endif
                </div>
                <div class="box-header flex justify-end">
                    @if(count($divisions)>0)
                    <div>
                       <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Destinations
                                 </span>
                            </label>
                            <select 
                                name="destination_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="getDestination($event.target.value)" 
                                wire:key="destination-0">
                                <option value="" hidden>Filter Destinations</option>
                                @foreach ($desitinations as $destination_item)
                                    <option 
                                        value="{{ $destination_item->id }}" 
                                        {{$selectedDestination == $destination_item->id ? "selected" : ""}} 
                                        wire:key="destination-{{ $destination_item->id }}">
                                        {{ $destination_item->name }}
                                    </option>
                                @endforeach
                            </select>
                       </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Divisions
                                 </span>
                            </label>
                            <select 
                                name="division_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="FilterRouteWayByDivision($event.target.value)" 
                                wire:key="division-0">
                                <option value="" hidden>Filter Divisions</option>
                                @foreach ($divisions as $division_item)
                                    <option 
                                        value="{{ $division_item->id }}" 
                                        {{$selectedDivision==$division_item->id?"selected":""}} 
                                        wire:key="division-{{ $division_item->id }}">
                                        {{ $division_item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="prism-toggle mt-5">
                        <a href="javascript:void(0)" wire:click="OpenNewRouteMapModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add New Route</a>
                    </div>
                    @endif
                    <div class="mt-5">
                        <a href="{{route('admin.route.destination_wise_route_list')}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="flex justify-between">
                        <div class="badge bg-outline-success cursor-pointer">
                            <span>No of Result: {{$destination_wise_route->count()}}</span>
                        </div>
                        <div>
                            {{-- <input type="text" class="badge bg-outline-primary !w-56" placeholder="Quick Search.."> --}}
                            @foreach ($seasion_types as $types_item)
                            <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==$types_item->id?"active-primary-badge":""}}" wire:click="FilterRoutePointBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                <span>{{ strtoupper($types_item->title) }}</span>
                            </div>
                            @endforeach
                            <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==0?"active-primary-badge":""}}" wire:click="FilterRoutePointBySeasionType(0)" wire:key="seasion-type-0">
                                <span>ALL</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="table-responsive">
                            <table
                                class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center">SL No.</th>
                                        <th scope="col" class="!text-center w-1/3">Route Name</th>
                                        <th scope="col" class="!text-center w-1/5">Divisions</th>
                                        <th scope="col" class="!text-center">Details</th>
                                        <th scope="col" class="!text-center" width="5%">Seasion</th>
                                        <th scope="col" class="!text-center" width="5%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($destination_wise_route as $k=>$route_item)
                                        <tr>
                                            <th scope="row" class="!text-center">
                                                <span class="badge bg-primary/10 text-primary">
                                                  {{$k+1}}
                                                </span>
                                            </th>
                                            <td>
                                                <!-- Route Name -->
                                                <p class="mb-1">{{ ucwords($route_item->route_name) }}</p>
                                            
                                                <!-- Waypoints Label -->
                                                <span class="badge bg-primary/10 text-primary uppercase rounded-full">
                                                    Waypoints
                                                </span>
                                            
                                                <!-- Waypoints Road View -->
                                                <div class="text-gray-600 text-sm">
                                                    @foreach ($route_item->waypoints as $index => $waypoint)
                                                        @if ($index % 3 == 0) <!-- Start a new line after every 3 items -->
                                                            <div class="flex items-center space-x-2">
                                                        @endif
                                                        
                                                        <!-- Start Icon for First Waypoint -->
                                                        @if ($index == 0)
                                                            <span class="text-green-600">
                                                                <i class="ri-map-pin-2-fill"></i> <!-- Remix Icon for Start -->
                                                            </span>
                                                        @endif
                                                
                                                        <!-- Waypoint Name -->
                                                        <span class="text-[12px]">{{ ucwords($waypoint->point_name) }}</span>
                                                
                                                        @if (!$loop->last)
                                                            <span class="text-red-600">
                                                                <x-icon-tooltip icon="ri-arrow-right-s-line" tooltip="{{ $waypoint->distance_from_previous_km }}, ({{ $waypoint->travel_time_from_previous }})"/>
                                                            </span>
                                                        @endif

                                                        
                                                
                                                        <!-- End Icon for Last Waypoint -->
                                                        @if ($loop->last)
                                                            <span class="text-blue-600">
                                                                <i class="ri-flag-fill"></i> <!-- Remix Icon for End -->
                                                            </span>
                                                        @endif
                                                
                                                        @if (($index + 1) % 3 == 0 || $loop->last) <!-- Close the div after 3 items or at the end -->
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                
                                            </td>
                                            <td class="align-top !text-center">
                                                @php
                                                $new_divisions = [];
                                                @endphp
                                                
                                                @foreach ($route_item->waypoints as $index => $r_items)
                                                {{-- {{dd($r_items->division)}} --}}
                                                    @php
                                                        if($r_items->division){
                                                            $new_divisions[] = $r_items->division->name;
                                                        }
                                                    @endphp
                                                @endforeach
                                                
                                                @if(count($new_divisions) > 0)
                                                    @foreach(collect($new_divisions)->unique() as $div_item)
                                                        <span class="badge bg-outline-secondary cursor-pointer">{{ $div_item }}</span>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="!p-0 align-top">
                                                <div class="table-responsive -mt-9">
                                                    <table class="table whitespace-nowrap min-w-full">
                                                        <thead class="bg-warning/10">
                                                            <tr class="border-b border-defaultborder">
                                                                <th class="text-center uppercase route_details">Total Distance (km)</th>
                                                                <th class="text-center uppercase route_details">Total Travel Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center route_details">{{$route_item->total_distance_km}}</td>
                                                                <td class="text-center route_details">{{$route_item->total_travel_time}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                            <td class="!text-center">
                                                @if($route_item->seasonType)
                                                    <span class="badge badge-{{ $route_item->seasion_type_id == 3 ? 'purple' : ($route_item->seasion_type_id == 1 ? 'info' : 'warning') }}-gradient">
                                                        {{$route_item->seasonType?$route_item->seasonType->title:"N/A"}}
                                                    </span>
                                                @endif
                                            </td>
                                            
                                            <td>

                                                <x-tooltip-button 
                                                    button-class="ti-btn-soft-info" 
                                                    border-class="info" 
                                                    action="EditRoute" 
                                                    :item-id="$route_item->id" 
                                                    key="edit-item" 
                                                    icon="ti ti-pencil" 
                                                    tooltip="Edit Item"
                                                />

                                                <x-tooltip-button 
                                                    button-class="ti-btn-soft-danger" 
                                                    border-class="danger" 
                                                    action="DeleteRouteItem" 
                                                    :item-id="$route_item->id" 
                                                    key="delete-item" 
                                                    icon="ti ti-trash" 
                                                    tooltip="Delete Item"
                                                />
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">
                                                <div class="alert alert-danger">
                                                    Result not found
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Model --}}
    <div id="assign_cab" class="hs-overlay {{$active_assign_new_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
            <div class="ti-modal-content p-20">
                <div class="ti-modal-header flex justify-end items-center">
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="OpenNewRouteMapModal('no')">
                        <i class="fa-solid fa-xmark text-lg text-dark"></i>
                    </button>
                </div>
                <div class="ti-modal-body text-start">
                    <div class="flex items-center">
                        <div class="grid grid-cols-1 hover:grid-cols-6 mx-1">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Destination
                                 </span>
                            </label>
                            <select 
                                name="destination_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="getDestination($event.target.value)" 
                                wire:key="destination-0">
                                <option value="" hidden>Filter Destinations</option>
                                @foreach ($desitinations as $destination_item)
                                    <option 
                                        value="{{ $destination_item->id }}" 
                                        {{$selectedDestination == $destination_item->id ? "selected" : ""}} 
                                        wire:key="destination-{{ $destination_item->id }}">
                                        {{ $destination_item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="my-3">
                        <div clas="flex item-center">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Seasion Type
                                 </span>
                            </label>
                            @foreach ($seasion_types as $types_item)
                            <div class="badge bg-outline-primary cursor-pointer !py-2 {{$selected_season_type==$types_item->id?"active-primary-badge":""}}" wire:click="FilterRoutePointBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                <span>{{ strtoupper($types_item->title) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive mb-2">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center w-1/2">Route Name</th>
                                        <th scope="col" class="!text-center w-1/10">Total Distance (km)</th>
                                        <th scope="col" class="!text-center w-1/10">Total Travel Time</th>
                                        <th scope="col" class="!text-center w-1/20">
                                            <button type="button" wire:click="addRoute" class="ti-btn ti-btn-sm ti-btn-soft-success !border !border-success/20">
                                                <i class="fa-solid fa-plus text-lg text-dark"></i>
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($new_routes as $routeIndex => $nroute)
                                        <tr class="border-b-0">
                                            <td class="!text-center">
                                                <div class="row flex">
                                                    <h6 class="badge bg-primary/10 text-primary"> {{ $routeIndex +1 }} </h6>
                                                    <input type="text" wire:model="new_routes.{{ $routeIndex }}.route_name" class="form-control form-control-sm text-center ml-1" placeholder="Enter route name">
                                                </div>
                                                @error('new_routes.' . $routeIndex . '.route_name') 
                                                    <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                            </td>
                                            <td class="!text-center">
                                                <input type="text" wire:model="new_routes.{{ $routeIndex }}.total_distance_km" class="form-control form-control-sm text-center" placeholder="Distance(km)">
                                                @error('new_routes.' . $routeIndex . '.total_distance_km') 
                                                    <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                            </td>
                                            <td class="!text-center">
                                                <input type="text" wire:model="new_routes.{{ $routeIndex }}.total_travel_time" class="form-control form-control-sm text-center" placeholder="Travel Time(hr)">
                                                @error('new_routes.' . $routeIndex . '.total_travel_time') 
                                                    <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                            </td>
                                            <td class="!text-center border-l-0">
                                                <button type="button" wire:click="removeRoute({{ $routeIndex }})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-t-0">
                                            <td colspan="3" class="border-r-0">
                                                <div class="table-responsive">
                                                    <label class="mb-1">
                                                        <span class="badge gap-2 bg-primary/10 text-primary uppercase">Waypoints</span>
                                                    </label>
                                                    <table class="table whitespace-nowrap min-w-full new-activity">
                                                        <thead class="bg-primary">
                                                            <tr class="border-b border-defaultborder uppercase">
                                                                <th class="!text-center w-1/3 way_point_th">Waypoint name</th>
                                                                <th class="!text-center way_point_th">Division</th>
                                                                <th class="!text-center way_point_th">Distance from (KM)</th>
                                                                <th class="!text-center way_point_th">Travel Time (HR)</th>
                                                                <th class="!text-center w-1/20">
                                                                    <button type="button" wire:click.prevent="addWayPoint({{ $routeIndex }})" class="ti-btn ti-btn-sm ti-btn-soft-primary way_point_add">
                                                                        <i class="fa-solid fa-plus text-sm"></i>
                                                                    </button>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($nroute['waypoints'] as $waypointIndex => $waypoint)
                                                                <tr class="border-b border-defaultborder">
                                                                    <td class="!text-center">
                                                                       <div>
                                                                            <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.point_name" class="form-control form-control-sm text-center" placeholder="e.g., Guwahati">
                                                                       </div>
                                                                        @error('new_routes.' . $routeIndex . '.waypoints.' . $waypointIndex . '.point_name') 
                                                                            <span class="text-danger">{{ $message }}</span> 
                                                                        @enderror
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <div>
                                                                            <select wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.division_id"
                                                                            class="placeholder:text-textmuted way_point_division"
                                                                            wire:change="FilterRouteWayByDivision($event.target.value)">
                                                                            
                                                                            <option value="" hidden>Filter Divisions</option>
                                                                            @foreach ($divisions as $division_item)
                                                                                <option value="{{ $division_item->id }}" wire:key="way-point-division-{{ $routeIndex }}-{{ $waypointIndex }}-{{ $division_item->id }}">
                                                                                    {{ $division_item->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        </div>
                                                                        @error('new_routes.' . $routeIndex . '.waypoints.' . $waypointIndex . '.division_id') 
                                                                            <span class="text-danger">{{ $message }}</span> 
                                                                        @enderror
                                                                    </td>
                                                                    
                                                                    <td class="!text-center">
                                                                        <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.distance_from_previous_km" class="form-control form-control-sm text-center" placeholder="{{$waypointIndex==0?"0 km":"From Previous"}}" {{$waypointIndex==0?"disabled":""}}>
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.travel_time_from_previous" class="form-control form-control-sm text-center" placeholder="{{$waypointIndex==0?"0 hours":"e.g., 3 hours"}}" {{$waypointIndex==0?"disabled":""}}>
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <button type="button" wire:click="removeWayPoint({{ $routeIndex }}, {{ $waypointIndex }})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                                            <i class="ti ti-minus"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                            <td class="border-l-0"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if (session('new-route-error'))
                            <div class="alert alert-danger">
                                {{ session('new-route-error') }}
                            </div>
                        @endif
                    
                        <div class="text-end mt-3">
                            <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                <i class="fa-solid fa-save"></i> Save
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- Model --}}

    {{-- Edit Modal --}}
        <div id="assign_cab" class="hs-overlay {{$active_assign_update_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
                <div class="ti-modal-content p-20">
                    <div class="ti-modal-header flex justify-end items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="CloseEditModal">
                            <i class="fa-solid fa-xmark text-lg text-dark"></i>
                        </button>
                    </div>
                    <div class="ti-modal-body text-start">
                        @if($edit_routes)
                            <div class="flex items-center">
                                <div class="grid grid-cols-1 hover:grid-cols-6 mx-1">
                                    <label for="">
                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                            Destination
                                        </span>
                                    </label>
                                    <select 
                                        name="destination_list" 
                                        class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                        wire:change="getDestination($event.target.value)" 
                                        wire:key="destination-0" wire:model="edit_routes.destination_id">
                                        <option value="" hidden>Filter Destinations</option>
                                        @foreach ($desitinations as $destination_item)
                                            <option 
                                                value="{{ $destination_item->id }}" 
                                                {{$edit_routes['destination_id'] == $destination_item->id ? "selected" :""}} 
                                                wire:key="destination-{{ $destination_item->id }}">
                                                {{ $destination_item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="flex item-center">
                                    <label for="">
                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                            Seasion Type
                                        </span>
                                    </label>
                                    @foreach ($seasion_types as $types_item)
                                        <div class="badge bg-outline-primary cursor-pointer !py-2 {{$edit_routes['seasion_type_id']==$types_item->id?"active-primary-badge":""}}" wire:click="FilterRoutePointBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                            <span>{{ strtoupper($types_item->title) }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <form wire:submit.prevent="submitEditForm">
                                <div class="table-responsive mb-2">
                                    <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="uppercase">
                                            <tr class="border-b !border-primary/30">
                                                <th scope="col" class="!text-center w-1/2">Route Name</th>
                                                <th scope="col" class="!text-center w-1/10">Total Distance (km)</th>
                                                <th scope="col" class="!text-center w-1/10">Total Travel Time</th>
                                                <th scope="col" class="!text-center w-1/20">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b-0">
                                                <td class="!text-center">
                                                    <div class="row flex">
                                                        <input type="text" wire:model="edit_routes.route_name" class="form-control form-control-sm text-center ml-1" placeholder="Enter route name" value="{{$edit_routes['route_name']}}">
                                                    </div>
                                                    @error('edit_routes.route_name') 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td class="!text-center">
                                                    <input type="text" wire:model="edit_routes.total_distance_km" class="form-control form-control-sm text-center" placeholder="Distance(km)" value="{{$edit_routes['total_distance_km']}}">
                                                    @error('edit_routes.total_distance_km') 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td class="!text-center">
                                                    <input type="text" wire:model="edit_routes.total_travel_time" class="form-control form-control-sm text-center" placeholder="Travel Time(hr)" value="{{$edit_routes['total_travel_time']}}">
                                                    @error('edit_routes.total_travel_time') 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td class="!text-center border-l-0">
                                                </td>
                                            </tr>
                                            <tr class="border-t-0">
                                                <td colspan="3" class="border-r-0">
                                                    <div class="table-responsive">
                                                        <label class="mb-1">
                                                            <span class="badge gap-2 bg-primary/10 text-primary uppercase">Waypoints</span>
                                                        </label>
                                                        <table class="table whitespace-nowrap min-w-full new-activity">
                                                            <thead class="bg-primary">
                                                                <tr class="border-b border-defaultborder uppercase">
                                                                    <th class="!text-center w-1/3 way_point_th">Waypoint name</th>
                                                                    <th class="!text-center way_point_th">Division</th>
                                                                    <th class="!text-center way_point_th">Distance from (KM)</th>
                                                                    <th class="!text-center way_point_th">Travel Time (HR)</th>
                                                                    <th class="!text-center w-1/20">
                                                                        <button type="button" wire:click.prevent="UpdateWayPoint()" class="ti-btn ti-btn-sm ti-btn-soft-primary way_point_add">
                                                                            <i class="fa-solid fa-plus text-sm"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($edit_routes['waypoints'] as $waypointIndex => $waypoint)
                                                                    <tr class="border-b border-defaultborder">
                                                                        <td class="!text-center">
                                                                            <div>
                                                                                <input type="text" wire:model="edit_routes.waypoints.{{ $waypointIndex }}.point_name" class="form-control form-control-sm text-center" placeholder="e.g., Guwahati" value="{{$waypoint['point_name']}}">
                                                                            </div>
                                                                            @error('edit_routes.waypoints.' . $waypointIndex . '.point_name') 
                                                                                <span class="text-danger">{{ $message }}</span> 
                                                                            @enderror
                                                                        </td>
                                                                        <td class="!text-center">
                                                                            <div>
                                                                                <select wire:model="edit_routes.waypoints.{{ $waypointIndex }}.division_id"
                                                                                class="placeholder:text-textmuted way_point_division">
                                                                                <option value="" hidden>Filter Divisions</option>
                                                                                @foreach ($divisions as $division_item)
                                                                                    <option value="{{ $division_item->id }}" wire:key="way-point-division-{{ $waypointIndex }}-{{ $division_item->id }}" {{ $waypoint['division_id'] == $division_item->id ? 'selected' : '' }}>
                                                                                        {{ $division_item->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            </div>
                                                                            @error('edit_routes.waypoints.' . $waypointIndex . '.division_id') 
                                                                                <span class="text-danger">{{ $message }}</span> 
                                                                            @enderror
                                                                        </td>
                                                                        
                                                                        <td class="!text-center">
                                                                            <input type="text" wire:model="edit_routes.waypoints.{{ $waypointIndex }}.distance_from_previous_km" class="form-control form-control-sm text-center" placeholder="{{$waypointIndex==0?"0 km":"From Previous"}}" {{$waypointIndex==0?"disabled":""}} value="{{$waypoint['distance_from_previous_km']}}">
                                                                        </td>
                                                                        <td class="!text-center">
                                                                            <input type="text" wire:model="edit_routes.waypoints.{{ $waypointIndex }}.travel_time_from_previous" class="form-control form-control-sm text-center" placeholder="{{$waypointIndex==0?"0 hours":"e.g., 3 hours"}}" {{$waypointIndex==0?"disabled":""}} value="{{$waypoint['travel_time_from_previous']}}">
                                                                        </td>
                                                                        <td class="!text-center">
                                                                            <button type="button" wire:click="removeEditWayPoint( {{ $waypointIndex }})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                                                <i class="ti ti-minus"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                                <td class="border-l-0"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @if (session('edit-route-error'))
                                    <div class="alert alert-danger">
                                        {{ session('edit-route-error') }}
                                    </div>
                                @endif
                            
                                <div class="text-end mt-3">
                                    <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                        <i class="fa-solid fa-save"></i> Update
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    {{-- Edit MOdal --}}


    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
@push('scripts')
@endpush

