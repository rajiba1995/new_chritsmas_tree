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
                                        <th scope="col" class="!text-center">Sightseeing Point</th>
                                        <th scope="col" class="!text-center">Seasion</th>
                                        <th scope="col" class="!text-center">Ticket Price (PP)</th>
                                        <th scope="col" class="!text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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
                        <div class="table-responsive">
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
                                                <input type="text" wire:model="new_routes.{{ $routeIndex }}.total_distance_km" class="form-control form-control-sm text-center">
                                                @error('new_routes.' . $routeIndex . '.total_distance_km') 
                                                    <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                            </td>
                                            <td class="!text-center">
                                                <input type="text" wire:model="new_routes.{{ $routeIndex }}.total_travel_time" class="form-control form-control-sm text-center">
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
                                                                        <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.point_name" class="form-control form-control-sm text-center" placeholder="e.g., Guwahati">
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <select name="division_list" class="placeholder:text-textmuted way_point_division" wire:change="FilterRouteWayByDivision($event.target.value)">
                                                                            <option value="" hidden>Filter Divisions</option>
                                                                            @foreach ($divisions as $division_item)
                                                                                <option value="{{ $division_item->id }}" wire:key="way-point-division-{{ $routeIndex }}-{{ $waypointIndex }}-{{ $division_item->id }}">
                                                                                    {{ $division_item->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.distance_from_previous_km" class="form-control form-control-sm text-center" placeholder="From Previous">
                                                                    </td>
                                                                    <td class="!text-center">
                                                                        <input type="text" wire:model="new_routes.{{ $routeIndex }}.waypoints.{{ $waypointIndex }}.travel_time_from_previous" class="form-control form-control-sm text-center" placeholder="e.g., 3 hours">
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
                        
                    
                        @if (session('new-sightseeing-error'))
                            <div class="alert alert-danger">
                                {{ session('new-sightseeing-error') }}
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


    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
@push('scripts')
<script>
    alert('gere');
</script>
@endpush

