<div>
    <div class="border-b-0 border-gray-200 dark:border-white/10 service-tab-list">
        <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
            <a class=" -mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==1?"active":""}}"
                href="javascript:void(0);" wire:click="TabChange(1, 'Route Wise')">
                Route Wise
            </a>
            <a class="-mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==2?"active":""}}"
                href="javascript:void(0);" wire:click="TabChange(2, 'Per Day')">
               Per Day
            </a>
        </nav>
    </div>
    <div class="grid grid-cols-12 gap-6">
        
        <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
                {{-- <div class="mt-2 mx-2 mb-1">
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
                </div> --}}
                <div class="box-header flex justify-end">
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
                    @if($active_tab==1)
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
                    @endif
                    {{-- route wise data --}}
                    @if($active_tab==1)
                        <div class="prism-toggle mt-5">
                            <a href="javascript:void(0)" wire:click="OpenNewRouteWiseServiceModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add Route Wise Service</a>
                        </div>
                    @endif
                    {{-- Per day data --}}
                    @if($active_tab==2)
                        <div class="prism-toggle mt-5">
                            <a href="javascript:void(0)" wire:click="OpenNewPerDayModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add Per Day Service</a>
                        </div>
                    @endif
                    <div class="mt-5">
                        <a href="{{route('admin.route.all_services')}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
                @if($active_tab==1)
                    <div class="box-body">
                        <div class="flex justify-between">
                            <div>
                                <div class="badge bg-outline-success cursor-pointer">
                                    <span>No of Result: {{$destination_wise_route_and_service->count()}}</span>
                                </div>
                               
                            </div>
                            <div>
                               <input type="text" class="badge bg-outline-primary w-xs" placeholder="Quick Search..">
                               <a href="{{route('admin.route.all_services')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20 h-6">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table
                                    class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                                    <thead class="uppercase">
                                        <tr class="border-b !border-primary/30">
                                            <th scope="col" class="!text-center">SL No.</th>
                                            <th scope="col" class="!text-center">Route</th>
                                            <th scope="col" class="!text-center">Activity</th>
                                            <th scope="col" class="!text-center">Sightseeings</th>
                                            <th scope="col" class="!text-center w-1/3">Cabs</th>
                                            <th scope="col" class="!text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($destination_wise_route_and_service as $k=>$route_item)
                                            <tr>
                                                <th scope="row" class="!text-center">
                                                    <span class="badge bg-primary/10 text-primary">
                                                    {{$k+1}}
                                                    </span>
                                                </th>
                                                <td>
                                                    <!-- Route Name -->
                                                    <p class="mb-1 uppercase">{{ $route_item->route?ucwords($route_item->route->route_name):"N/A" }}</p>
                                                    @if (!empty($route_item->route) && !empty($route_item->route->waypoints))
                                                        <ul class="list-none">
                                                            @foreach ($route_item->route->waypoints as $way_index => $waypoint)
                                                                <li class="items-center text-gray-600 dark:text-white/70">
                                                                    @if ($way_index == 0)
                                                                        <span class="text-green-600 mx-2">
                                                                            <i class="ri-map-pin-2-fill"></i>
                                                                        </span>
                                                                    @endif
                                                                    @if (!$loop->last && $way_index != 0)
                                                                        <span class="mx-2 text-red-600">→</span> <!-- Arrow between waypoints -->
                                                                    @endif
                                                                    @if ($loop->last)
                                                                        <span class="text-blue-600 mx-2">
                                                                            <i class="ri-flag-fill"></i> <!-- Remix Icon for End -->
                                                                        </span>
                                                                    @endif
                                                                    {{ ucwords($waypoint->point_name) }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </td>
                                                <td class="align-top !text-center">
                                                        @forelse ($route_item->activities as $akey=> $act_item)
                                                            @if($act_item->activity)
                                                                <div class="form-check">
                                                                    <ul class="space-y-3 text-sm">
                                                                        <li class="flex space-x-3 rtl:space-x-reverse !text-xs">
                                                                            <svg class="flex-shrink-0 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                                fill="currentColor" fill-opacity="0.1"></path>
                                                                              <path
                                                                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                                fill="currentColor"></path>
                                                                            </svg>
                                                                            <span class="text-gray-600 dark:text-white/70">
                                                                                {{$act_item->activity->name}} 
                                                                                @if($act_item->activity->type === "PAID")
                                                                                    <span class="badge bg-success text-white cursor-pointer ml-2 tooltip-container">
                                                                                        {{$act_item->activity->type}}
                                                                                        <span class="tooltip-text">
                                                                                            AP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $act_item->activity->price }},
                                                                                            PP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $act_item->activity->ticket_price }}
                                                                                        </span>
                                                                                    </span>
                                                                                @endif
                                                                            </span>
                                                                          </li>
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @empty
                                                            <div class="alert alert-danger !text-black !text-xs">
                                                                👉Activities are not added.
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </td>
                                                <td class="align-top !text-center">
                                                    @forelse ($route_item->sightseeings as $sskey=> $service_sight_item)
                                                        @if($service_sight_item->sightseeing)
                                                            <div class="form-check">
                                                                <ul class="space-y-3 text-sm">
                                                                    <li class="flex space-x-3 rtl:space-x-reverse !text-xs">
                                                                        <svg class="flex-shrink-0 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                            fill="currentColor" fill-opacity="0.1"></path>
                                                                        <path
                                                                            d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                            fill="currentColor"></path>
                                                                        </svg>
                                                                        <span class="text-gray-600 dark:text-white/70">
                                                                            {{$service_sight_item->sightseeing->name}} 
                                                                            @if($service_sight_item->sightseeing->type === "PAID")
                                                                                <span class="badge bg-success text-white cursor-pointer ml-2 tooltip-container">
                                                                                    {{$service_sight_item->sightseeing->type}}
                                                                                    <span class="tooltip-text">
                                                                                        TP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $service_sight_item->sightseeing->ticket_price }}
                                                                                    </span>
                                                                                </span>
                                                                            @endif
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    @empty
                                                        <div class="alert alert-danger !text-black !text-xs">
                                                            👉Sightseeings are not added.
                                                        </div>
                                                    @endforelse
                                                </td>
                                                <td class="!p-0 align-top">
                                                    <div class="table-responsive -mt-9">
                                                        @if(count($route_item->cabs)>0)
                                                            <table class="table whitespace-nowrap min-w-full">
                                                                <thead class="bg-warning/10">
                                                                    <tr class="border-b border-defaultborder">
                                                                        @foreach ($route_item->cabs as $cabs_key=>$cabs_item)
                                                                            <th class="text-center uppercase route_details"> {{$cabs_item->divisionCab->cab->title}}
                                                                                <br>
                                                                                <span>{{$cabs_item->divisionCab->cab->capacity}} SEATER</span>
                                                                            </th>
                                                                        @endforeach
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        @foreach ($route_item->cabs as $cabs_key=> $cabs_item)
                                                                            <td class="text-center route_details">
                                                                                <input type="text" class="form-control !p-0 text-center border-none" placeholder="Price" value="{{$cabs_item->cab_price?env('DEFAULT_CURRENCY_SYMBOL'):''}}{{$cabs_item->cab_price}}" onkeyup="validateCabPrice(this, {{$cabs_item->id}})">          
                                                                            </td>
                                                                        @endforeach
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        @else
                                                            <div class="alert alert-danger !text-black !text-xs">
                                                                👉Cabs are not added.
                                                            </div>
                                                        @endif
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <x-tooltip-button 
                                                        button-class="ti-btn-soft-info" 
                                                        border-class="info" 
                                                        action="GetSummaryById" 
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
                @endif
                @if($active_tab==2)
                    <div class="box-body">
                        <div class="flex justify-between">
                            <div>
                                <div class="badge bg-outline-success cursor-pointer">
                                    <span>No of Result: {{$destination_wise_route_and_service->count()}}</span>
                                </div>
                            </div>
                            <div>
                               <input type="text" class="badge bg-outline-primary w-xs" placeholder="Quick Search..">
                               <a href="{{route('admin.route.all_services')}}" class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20 h-6">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="table-responsive">
                                <table
                                    class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                                    <thead class="uppercase">
                                        <tr class="border-b !border-primary/30">
                                            <th scope="col" class="!text-center">SL No.</th>
                                            <th scope="col" class="!text-center">Destination</th>
                                            <th scope="col" class="!text-center">Activity</th>
                                            {{-- <th scope="col" class="!text-center">Sightseeings</th> --}}
                                            <th scope="col" class="!text-center w-1/3">Cabs</th>
                                            <th scope="col" class="!text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($destination_wise_route_and_service as $k=>$route_item)
                                            <tr>
                                                <th scope="row" class="!text-center">
                                                    <span class="badge bg-primary/10 text-primary">
                                                    {{$k+1}}
                                                    </span>
                                                </th>
                                                <td>
                                                    <!-- Route Name -->
                                                    <p class="mb-1">{{ $route_item->destination?ucwords($route_item->destination->name):"N/A" }}</p>
                                                </td>
                                                <td class="align-top !text-center">
                                                        @forelse ($route_item->activities as $akey=> $act_item)
                                                            @if($act_item->activity)
                                                                <div class="form-check">
                                                                    <ul class="space-y-3 text-sm">
                                                                        <li class="flex space-x-3 rtl:space-x-reverse !text-xs">
                                                                            <svg class="flex-shrink-0 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                                fill="currentColor" fill-opacity="0.1"></path>
                                                                              <path
                                                                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                                fill="currentColor"></path>
                                                                            </svg>
                                                                            <span class="text-gray-600 dark:text-white/70">
                                                                                {{$act_item->activity->name}} 
                                                                                @if($act_item->activity->type === "PAID")
                                                                                    <span class="badge bg-success text-white cursor-pointer ml-2 tooltip-container">
                                                                                        {{$act_item->activity->type}}
                                                                                        <span class="tooltip-text">
                                                                                            AP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $act_item->activity->price }},
                                                                                            PP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $act_item->activity->ticket_price }}
                                                                                        </span>
                                                                                    </span>
                                                                                @endif
                                                                            </span>
                                                                          </li>
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @empty
                                                            <div class="alert alert-danger !text-black !text-xs">
                                                                👉Activities are not added.
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </td>
                                                <td class="!p-0 align-top">
                                                    <div class="table-responsive -mt-9">
                                                        @if(count($route_item->cabs)>0)
                                                            <table class="table whitespace-nowrap min-w-full">
                                                                <thead class="bg-warning/10">
                                                                    <tr class="border-b border-defaultborder">
                                                                        @foreach ($route_item->cabs as $cabs_key=> $cabs_item)
                                                                            <th class="text-center uppercase route_details">    {{$cabs_item->divisionCab->cab->title}}
                                                                                <br>
                                                                               <span>{{$cabs_item->divisionCab->cab->capacity}} SEATER</span>
                                                                            </th>
                                                                        @endforeach
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        @foreach ($route_item->cabs as $cabs_key=> $cabs_item)
                                                                            <td class="text-center route_details">
                                                                                <input type="text" class="form-control !p-0 text-center border-none" placeholder="Price" value="{{$cabs_item->cab_price?env('DEFAULT_CURRENCY_SYMBOL'):''}}{{$cabs_item->cab_price}}" onkeyup="validateCabPrice(this, {{$cabs_item->id}})">          
                                                                            </td>
                                                                        @endforeach
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        @else
                                                            <div class="alert alert-danger !text-black !text-xs">
                                                                👉Cabs are not added.
                                                            </div>
                                                        @endif
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <x-tooltip-button 
                                                        button-class="ti-btn-soft-info" 
                                                        border-class="info" 
                                                        action="GetSummaryById" 
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
                @endif
            </div>
        </div>
    </div>
    {{-- Route Wise Model --}}
        <div id="assign_cab" class="hs-overlay {{$active_assign_new_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg">
                <div class="ti-modal-content p-20">
                    <div class="ti-modal-header flex justify-between items-center">
                        <div class="border-b-0 border-gray-200 dark:border-white/10 service-tab-list mb-3">
                            <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                @if($active_tab==1)
                                <a class=" -mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==1?"active":""}}"
                                    href="javascript:void(0);">
                                    Route Wise
                                </a>
                                @endif
                                @if($active_tab==2)
                                <a class="-mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==2?"active":""}}"
                                    href="javascript:void(0);">
                                   Per Day
                                </a>
                                @endif
                            </nav>
                        </div>
                        <div>
                            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="OpenNewRouteWiseServiceModal('no')">
                                <i class="fa-solid fa-xmark text-lg text-dark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="ti-modal-body text-start">
                        <form wire:submit.prevent="submitNewService">
                            <div class="my-3">
                                <div class="flex justify-between">
                                    <div>
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
                            </div>
                            <div class="table-responsive mb-2">
                                <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                    <thead class="uppercase">
                                        <tr class="border-b !border-primary/30">
                                            <th scope="col" class="!text-center w-1/10">#</th>
                                            <th scope="col" class="!text-center w-1/3">Route Name</th>
                                            <th scope="col" class="!text-center w-1/10">Activities</th>
                                            <th scope="col" class="!text-center w-1/10">SightSeeings</th>
                                            <th scope="col" class="!text-center w-1/10">Cabs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($destination_wise_route as $rindex => $r_items)
                                            <tr>
                                               
                                                <td class="!text-center" width="6%">
                                                    <div class="form-check form-check-lg d-flex align-items-center">
                                                        <input type="checkbox" class="form-check-input border-sky-500 new_service_checkbox"
                                                            wire:model="new_route.{{ $rindex }}" 
                                                            id="checkbox-lg{{$rindex}}" 
                                                            wire:change="AddedNewRoute($event.target.checked, $event.target.value, {{ $rindex }})" 
                                                            value="{{ $r_items->id }}">
                                                    </div>
                                                </td>
                                                <td> 
                                                    <p class="mb-1">{{ ucwords($r_items->route_name) }}</p>
                                                    <div class="text-gray-600 text-sm">
                                                        @if(count($r_items->waypoints)>0)
                                                            @foreach ($r_items->waypoints as $way_index => $waypoint)
                                                                @if ($way_index % 3 == 0) <!-- Start a new line after every 3 items -->
                                                                    <div class="flex items-center space-x-2">
                                                                @endif
                                                                <!-- Start Icon for First Waypoint -->
                                                                @if ($way_index == 0)
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
                                                        
                                                                @if (($way_index + 1) % 3 == 0 || $loop->last) <!-- Close the div after 3 items or at the end -->
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    {{-- For Activities --}}
                                                    @forelse ($all_activities as $act_index => $activity_item)
                                                        <div class="form-check">
                                                            <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                                wire:model="new_service.{{ $rindex }}.selectedActivities"  
                                                                value="{{ $activity_item->id }}" 
                                                                id="checkbox-sm-activity-{{$rindex+1}}-{{$act_index+1}}"
                                                                @disabled(!(isset($new_route[$rindex])) || isset($new_route[$rindex]) && $new_route[$rindex] === false)>
                                                            <label class="form-check-label cursor-pointer" 
                                                                for="checkbox-sm-activity-{{$rindex+1}}-{{$act_index+1}}">
                                                                {{$activity_item->name}} 
                                                                @if($activity_item->type === "PAID")
                                                                    <span class="badge bg-success text-white cursor-pointer ml-2 tooltip-container">
                                                                        {{$activity_item->type}}
                                                                        <span class="tooltip-text">
                                                                            AP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $activity_item->price }},
                                                                            PP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $activity_item->ticket_price }}
                                                                        </span>
                                                                    </span>
                                                                @endif
                                                            </label>
                                                        </div>
                                                    @empty
                                                        <div class="alert alert-danger">
                                                            👉Activities are not available. <a href="{{ route('admin.route.division_wise_activity_list') }}" class="text-primary">click here to add.</a>
                                                        </div>
                                                    @endforelse
                                                </td>
                                                <td>
                                                    {{-- For SightSeeings --}}
                                                    @forelse ($all_sightseeings as $sit_index => $sight_item)
                                                        <div class="form-check">
                                                            <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                                wire:model="new_service.{{ $rindex }}.selectedSightseeings"
                                                                value="{{ $sight_item->id }}" 
                                                                id="checkbox-sm-sight-{{$rindex+1}}-{{$sit_index+1}}"
                                                                @disabled(!(isset($new_route[$rindex])) || isset($new_route[$rindex]) && $new_route[$rindex] === false)>
                                                            <label class="form-check-label cursor-pointer" 
                                                                for="checkbox-sm-sight-{{$rindex+1}}-{{$sit_index+1}}">
                                                                {{$sight_item->name}} ({{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ round($sight_item->ticket_price) }})
                                                            </label>
                                                        </div>
                                                    @empty
                                                        <div class="alert alert-danger">
                                                            👉Sightseeings are not available. <a href="{{ route('admin.route.division_wise_sightseeing_list') }}" class="text-primary">click here to add.</a>
                                                        </div>
                                                    @endforelse
                                                </td>
                                                <td>
                                                    {{-- For Cabs --}}
                                                    @if(count($all_cabs)>0)
                                                        @forelse ($all_cabs->unique('cab_id') as $cab_index => $cab_item)
                                                            <div class="form-check">
                                                                <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                                    wire:model="new_service.{{ $rindex }}.selectedCabs"
                                                                    value="{{ $cab_item->id }}" 
                                                                    id="checkbox-sm-cab-{{$rindex+1}}-{{$cab_index+1}}"
                                                                    @disabled(!(isset($new_route[$rindex])) || isset($new_route[$rindex]) && $new_route[$rindex] === false)>
                                                                <label class="form-check-label cursor-pointer" 
                                                                    for="checkbox-sm-cab-{{$rindex+1}}-{{$cab_index+1}}">
                                                                    {{ $cab_item->cab ? $cab_item->cab->title : "N/A" }}
                                                                    <span class="badge bg-primary/10 text-primary uppercase rounded-full ml-2">
                                                                        {{ $cab_item->cab ? $cab_item->cab->capacity.' Seater' : "N/A" }}
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        @empty
                                                            <div class="alert alert-danger">
                                                                👉Cabs are not available. <a href="{{ route('admin.route.division_wise_cab_list') }}" class="text-primary">click here to add.</a>
                                                            </div>
                                                        @endforelse
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">
                                                    <div class="alert alert-danger">
                                                        👉No routes are available for this destination. <a href="{{ route('admin.route.destination_wise_route_list') }}" class="text-primary">click here to add.</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            @if (session('new-route-error'))
                                <div class="alert alert-danger">
                                    {{ session('new-route-error') }}
                                </div>
                            @endif
                        
                            {{-- If destination_wise_route_and_service is getting --}}
                            {{-- @if(count($destination_wise_route)>0) --}}
                            <div class="text-end mt-3">
                                <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                    <i class="fa-solid fa-save"></i> Save
                                </button>
                            </div>
                            {{-- @endif --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- Model --}}

    {{-- Per Day Wise Model --}}
        <div id="assign_cab" class="hs-overlay {{$active_assign_new_per_day_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg">
                <div class="ti-modal-content p-20">
                    <div class="ti-modal-header flex justify-between items-center">
                        <div class="border-b-0 border-gray-200 dark:border-white/10 service-tab-list mb-3">
                            <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                @if($active_tab==1)
                                <a class=" -mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==1?"active":""}}"
                                    href="javascript:void(0);">
                                    Route Wise
                                </a>
                                @endif
                                @if($active_tab==2)
                                <a class="-mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==2?"active":""}}"
                                    href="javascript:void(0);">
                                Per Day
                                </a>
                                @endif
                            </nav>
                        </div>
                        <div>
                            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="OpenNewPerDayModal('no')">
                                <i class="fa-solid fa-xmark text-lg text-dark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="ti-modal-body text-start">
                        <form wire:submit.prevent="submitNewService">
                            <div class="my-3">
                                <div class="flex justify-between">
                                    
                                    <div>
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
                            </div>
                            <div class="table-responsive mb-2">
                                <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                    <thead class="uppercase">
                                        <tr class="border-b !border-primary/30">
                                            <th scope="col" class="!text-center w-1/10">#</th>
                                            <th scope="col" class="!text-center w-1/3">Destination</th>
                                            <th scope="col" class="!text-center w-1/10">Activities</th>
                                            {{-- <th scope="col" class="!text-center w-1/10">SightSeeings</th> --}}
                                            <th scope="col" class="!text-center w-1/10">Cabs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="!text-center" width="6%">
                                                <div class="form-check form-check-lg d-flex align-items-center">
                                                    <input type="checkbox" class="form-check-input border-sky-500 new_service_checkbox"
                                                        wire:model="new_per_destination.0" 
                                                        id="checkbox-lg-per-day0" 
                                                        wire:change="AddedNewRoute($event.target.checked, $event.target.value, 0)" 
                                                        value="{{ $selectedDestination }}">
                                                </div>
                                            </td>
                                            <td class="!text-center"> 
                                                <p class="mb-1">{{ ucwords($selectedDestinationName) }}</p>
                                            </td>
                                            <td>
                                                {{-- For Activities --}}
                                                @forelse ($all_activities as $act_index => $activity_item)
                                                    <div class="form-check">
                                                        <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                            wire:model="new_per_day_service.0.selectedActivities"  
                                                            value="{{ $activity_item->id }}" 
                                                            id="checkbox-sm-activity-per-day-0-{{$act_index+1}}"
                                                            @disabled(!(isset($new_per_destination[0])) || isset($new_per_destination[0]) && $new_per_destination[0] === false)>
                                                        <label class="form-check-label cursor-pointer" 
                                                            for="checkbox-sm-activity-per-day-0-{{$act_index+1}}">
                                                            {{$activity_item->name}} 
                                                            @if($activity_item->type === "PAID")
                                                                <span class="badge bg-success text-white cursor-pointer ml-2 tooltip-container">
                                                                    {{$activity_item->type}}
                                                                    <span class="tooltip-text">
                                                                        AP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $activity_item->price }},
                                                                        PP-{{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ $activity_item->ticket_price }}
                                                                    </span>
                                                                </span>
                                                            @endif
                                                        </label>
                                                    </div>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        👉Activities are not available. <a href="{{ route('admin.route.division_wise_activity_list') }}" class="text-primary">click here to add.</a>
                                                    </div>
                                                @endforelse
                                            </td>
                                            {{-- <td>
                                                @forelse ($all_sightseeings as $sit_index => $sight_item)
                                                    <div class="form-check">
                                                        <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                            wire:model="new_per_day_service.0.selectedSightseeings"
                                                            value="{{ $sight_item->id }}" 
                                                            id="checkbox-sm-sight-per-day-0-{{$sit_index+1}}"
                                                            @disabled(!(isset($new_per_destination[0])) || isset($new_per_destination[0]) && $new_per_destination[0] === false)>
                                                        <label class="form-check-label cursor-pointer" 
                                                            for="checkbox-sm-sight-per-day-0-{{$sit_index+1}}">
                                                            {{$sight_item->name}} ({{ENV('DEFAULT_CURRENCY_SYMBOL')}}{{ round($sight_item->ticket_price) }})
                                                        </label>
                                                    </div>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        👉Sightseeings are not available. <a href="{{ route('admin.route.division_wise_sightseeing_list') }}" class="text-primary">click here to add.</a>
                                                    </div>
                                                @endforelse
                                            </td> --}}
                                            <td>
                                                {{-- For Cabs --}}
                                                @forelse ($all_cabs as $cab_index => $cab_item)
                                                    <div class="form-check">
                                                        <input class="form-check-input border-sky-500 new_service_checkbox" type="checkbox" 
                                                            wire:model="new_per_day_service.0.selectedCabs"
                                                            value="{{ $cab_item->id }}" 
                                                            id="checkbox-sm-cab-per-day-0-{{$cab_index+1}}"
                                                            @disabled(!(isset($new_per_destination[0])) || isset($new_per_destination[0]) && $new_per_destination[0] === false)>
                                                        <label class="form-check-label cursor-pointer" 
                                                            for="checkbox-sm-cab-per-day-0-{{$cab_index+1}}">
                                                            {{ $cab_item->cab ? $cab_item->cab->title : "N/A" }}
                                                            <span class="badge bg-primary/10 text-primary uppercase rounded-full ml-2">
                                                                {{ $cab_item->cab ? $cab_item->cab->capacity.' Seater' : "N/A" }}
                                                            </span>
                                                        </label>
                                                    </div>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        👉Cabs are not available. <a href="{{ route('admin.route.division_wise_cab_list') }}" class="text-primary">click here to add.</a>
                                                    </div>
                                                @endforelse
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @if (session('new-route-error'))
                                <div class="alert alert-danger">
                                    {{ session('new-route-error') }}
                                </div>
                            @endif
                        
                            {{-- If destination_wise_route_and_service is getting --}}
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
    <div id="edit_modal_for_service"
    class="hs-overlay {{$active_assign_update_modal==0 ? 'hidden' : ''}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg">
        <div class="ti-modal-content p-20">
            <div class="ti-modal-header flex justify-between items-center">
            <div class="border-b-0 border-gray-200 dark:border-white/10 service-tab-list mb-3">
                <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                    @if($active_tab==1)
                    <a class=" -mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==1?"active":""}}"
                        href="javascript:void(0);">
                        Route Wise
                    </a>
                    @endif
                    @if($active_tab==2)
                    <a class="-mb-px py-1 px-5 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-defaulttextcolor rounded-t-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300 {{$active_tab==2?"active":""}}"
                        href="javascript:void(0);">
                    Per Day
                    </a>
                    @endif
                </nav>
            </div>
            <div>
                <button type="button"
                class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger"
                wire:click="CloseEditModal('no')">
                <i class="fa-solid fa-xmark text-lg text-dark"></i>
                </button>
            </div>
            </div>
            <div class="ti-modal-body text-start">
                @if($edit_summary)
                <form wire:submit.prevent="submitEditSummary">
                    <div class="my-3">
                    <div class="flex justify-between">
                        <div>
                        <label for="">
                            <span class="badge gap-2 bg-danger/10 text-danger uppercase">Destination</span>
                        </label>
                        <select name="destination_list" class="placeholder:text-textmuted text-sm selected_seasion_type"
                            wire:model.defer="edit_summary.destination_id">
                            <option value="" hidden>Filter Destinations</option>
                            @foreach ($desitinations as $destination_item)
                            <option value="{{ $destination_item->id }}" {{$edit_summary['destination_id']==$destination_item->id?"selected":"hidden"}}>{{ $destination_item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    </div>
        
                    <!-- Table for displaying the summary data -->
                    <div class="table-responsive mb-2">
                    <table
                        class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                        <thead class="uppercase">
                        <tr class="border-b !border-primary/30">
                            <th scope="col" class="!text-center w-1/3">
                            {{$edit_summary['service_type'] === "Route Wise" ? "Route Name" : "Destination"}}</th>
                            <th scope="col" class="!text-center w-1/10">Activities</th>
                            @if($edit_summary['service_type'] === "Route Wise")
                            <th scope="col" class="!text-center w-1/10">SightSeeings</th>
                            @endif
                            <th scope="col" class="!text-center w-1/10">Cabs</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($edit_summary)
                        <tr>
                            <td class="!text-center">
                                <input type="hidden" class="form-check-input border-sky-500 new_service_checkbox"
                                wire:model.defer="edit_summary.id" id="checkbox-lg-edit" value="{{ $edit_summary['id'] }}">
                            <p class="mb-1">
                                {{$edit_summary['service_type'] === "Route Wise" ? ucwords($edit_summary['route']['route_name']) : ucwords($edit_summary['destination']['name'])}}
                            </p>
                            </td>
                            <td>
                            @forelse ($edit_summary['activities'] as $edit_act_item)
                            <div class="form-check">
                                <input class="form-check-input border-sky-500" type="checkbox"
                                wire:model.defer="edit_summary.activities.{{ $loop->index }}.id" value="{{ $edit_act_item['id'] }}"
                                id="checkbox-sm-activity-{{ $loop->index + 1 }}" @if(in_array($edit_act_item['id'], array_column($edit_summary['activities'], 'id'))) checked @endif>
                                <label class="form-check-label" for="checkbox-sm-activity-{{ $loop->index + 1 }}">
                                {{$edit_act_item['activity']['name']}}
                                <!-- Assuming you want to show some identifier here -->
                                </label>
                            </div>
                            @empty
                            <div class="alert alert-danger">
                                👉 No activities available.
                            </div>
                            @endforelse
                            </td>
                            @if($edit_summary['service_type'] === "Route Wise")
                            <td>
                            @forelse ($edit_summary['sightseeings'] as $edit_sight_item)
                            <div class="form-check">
                                <input class="form-check-input border-sky-500" type="checkbox"
                                wire:model.defer="edit_summary.sightseeings.{{ $loop->index }}.id"
                                value="{{ $edit_sight_item['id'] }}" id="checkbox-sm-sightseeing-{{ $loop->index + 1 }}" @if(in_array($edit_sight_item['id'], array_column($edit_summary['sightseeings'], 'id'))) checked @endif>
                                <label class="form-check-label" for="checkbox-sm-sightseeing-{{ $loop->index + 1 }}">
                                {{$edit_sight_item['sightseeing']['name']}}
                                <!-- Assuming you want to show some identifier here -->
                                </label>
                            </div>
                            @empty
                            <div class="alert alert-danger">
                                👉 No sightseeing available.
                            </div>
                            @endforelse
                            </td>
                            @endif
                            <td>
                                @forelse ($edit_summary['cabs'] as $edit_cab_item) <!-- Ensure you're iterating over the available cabs -->
                                    <div class="form-check">
                                        <input class="form-check-input border-sky-500" 
                                            type="checkbox" 
                                            wire:model.defer="edit_summary.cabs.{{ $loop->index }}.id" 
                                            value="{{ $edit_cab_item['id'] }}"
                                            id="checkbox-sm-cab-{{ $loop->index + 1 }}"
                                            @if(in_array($edit_cab_item['id'], array_column($edit_summary['cabs'], 'id'))) checked @endif> <!-- Set checked attribute on input -->

                                        <label class="form-check-label" for="checkbox-sm-cab-{{ $loop->index + 1 }}">
                                            <strong>{{$edit_cab_item['division_cab']['cab']['title']}}</strong>
                                            @if($edit_cab_item['cab_price'])
                                                <span class="text-danger">({{ENV('DEFAULT_CURRENCY_SYMBOL').$edit_cab_item['cab_price']}})</span>
                                            @endif
                                        </label>
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        👉 No cabs available.
                                    </div>
                                @endforelse
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="5">
                            <div class="alert alert-danger">
                                👉 No data available.
                            </div>
                            </td>
                        </tr>
                        @endif
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
                        <i class="fa-solid fa-save"></i> Save
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('resetCheckboxes', () => {
        document.querySelectorAll('.new_service_checkbox').forEach((checkbox) => {
            checkbox.checked = false;
        });
    });
    window.addEventListener('showConfirm', function (event) {
        let itemId = event.detail[0].itemId;
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('deleteItem', itemId); // Calls Livewire method directly
                Swal.fire("Deleted!", "Your item has been deleted.", "success");
            }
        });
    });
</script>
@endsection

