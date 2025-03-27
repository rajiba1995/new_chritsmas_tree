<div>
    <link rel="stylesheet" href="{{ asset('build/assets/libs/dragula/dragula.min.css') }}">
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
                <div class="box-header">
                    {{-- <div>
                        <a href="{{route('admin.itinerary.preset.builder',[$destinationId,$categoryId])}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div> --}}
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class="mx-2">
                                <p class="badge gap-2 bg-danger/10 text-danger uppercase">Destination</p><hr>
                                <div class="badge bg-outline-primary cursor-pointer !font-normal !text-sm uppercase">
                                    <span> {{$destinationName}}</span>
                                </div>
                            </div>
                            <div class="mx-2">
                                <p class="badge gap-2 bg-danger/10 text-danger uppercase">Hotel Category</p><hr>
                                <div class="badge bg-outline-primary cursor-pointer !font-normal !text-sm uppercase">
                                    <span>    {{$categoryName}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive mb-2">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30 bg-warning/10">
                                        <th scope="col" class="!text-center w-4/5">
                                            <div class="custom-fulldiv">
                                                <div>
                                                    Name Of Itinerary
                                                </div>
                                                <div class="nd-field">
                                                    <input type="text" wire:model="itinerary_syntax" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                                <div class="nd-field" style="max-width: none">
                                                    <input type="text" wire:model="itinerary_journey" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="!text-center w-1/5">
                                            <button type="submit" class="ti-btn ti-btn-success-full !py-1 !px-4 ti-btn-wave  me-[0.375rem]">SAVE</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="bg-primary/20">
                                            <tr>
                                                <th class="!text-center">BANNER SECTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-6 col-span-12 mb-4" wire:ignore>
                                                            <label class="">Name of Lead</label>
                                                            <input type="text" wire:model="name_of_lead" class="form-control form-control-sm placeholder:text-textmuted" wire:keyup="UpdateByKeyUp('banner_section','name_of_lead',$event.target.value)" wire:ignore.self>
                                                        </div>
                                                        <div class="md:col-span-6 col-span-12 mb-4">
                                                            <label class="">Welcome To</label>
                                                            <input type="text" 
                                                            wire:model="welcome_to" 
                                                            class="form-control form-control-sm placeholder:text-textmuted" 
                                                            wire:keyup="UpdateByKeyUp('banner_section','welcome_to',$event.target.value)">
                                                        </div>
                                                    </div>
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Main Banner</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($mainBanner as $index => $main_banner)
                                                                    <label class="image-preview-label px-1">
                                                                        <input type="radio" name="main_banner" wire:model="main_banner" value="{{ $main_banner->image }}" class="hidden peer" wire:change="UpdateByKeyUp('banner_section','main_banner',$event.target.value)">
                                                                        <div class="image-preview peer-checked:border-blue-500 relative">
                                                                            <img src="{{ asset($main_banner->image) }}" alt="Image Preview" class="image-thumbnail">
                                                                            <!-- Selected Text -->
                                                                            <div class="absolute bottom-0 left-0 right-0 bg-white text-center text-sm font-semibold py-1 hidden peer-checked:block">
                                                                                Selected
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload New Banner</span>
                                                                    <input type="file" wire:model="uploadMainBanner" class="file-input" accept="image">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="bg-primary/20">
                                            <tr>
                                                <th class="!text-center uppercase">About Destination</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label "> Title</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <input type="text" class="form-control form-control-sm" wire:model="about_destination_title" wire:keyup="UpdateByKeyUp('about_destination','about_destination_title',$event.target.value)">
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <textarea wire:model="about_destination_text" class="form-control form-control-sm" rows="3" wire:keyup="UpdateByKeyUp('about_destination','about_destination_text',$event.target.value)">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Trip Highlights</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            @foreach ($trip_highlights as $index => $highlight)
                                                                <div class="flex items-center gap-2 mb-2">
                                                                    <input type="text" class="form-control form-control-sm" 
                                                                        wire:model="trip_highlights.{{ $index }}" 
                                                                        wire:keyup="UpdateByKeyUp('about_destination','trip_highlights_{{ $index }}',$event.target.value)">
                                                        
                                                                    {{-- @if ($index > 0)  --}}
                                                                        <button type="button" wire:click="removeAboutDescHighlight({{ $index }})" 
                                                                            class="badge bg-outline-danger cursor-pointer !font-normal !text-sm uppercase">
                                                                            Remove
                                                                        </button>
                                                                    {{-- @endif --}}
                                                                </div>
                                                            @endforeach
                                                        
                                                            <div class="text-end">
                                                                <button type="button" wire:click="addAboutDescHighlight" 
                                                                    class="badge bg-outline-success cursor-pointer !font-normal !text-sm uppercase">
                                                                    Add Trip Highlights
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Destination Slider images</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($destinationImages as $slider_index => $slider_image)
                                                                    {{-- <label class="image-preview-label px-1 relative" wire:key="destination-image-{{ $slider_index }}"> --}}
                                                                        <div class="image-preview peer-checked:border-blue-500 relative !overflow-visible">
                                                                            <!-- Delete Button (Top-Right Corner) -->
                                                                            <button type="button"
                                                                                class="delete-icon"
                                                                                wire:click="ItineraryImageDelete('{{ $slider_image }}')">
                                                                                ✖
                                                                            </button>
                                                                            <!-- Image -->
                                                                            <img src="{{ asset($slider_image) }}" alt="Image Preview" class="image-thumbnail cursor-pointer" wire:click="showImageModal('{{ $slider_image }}')">
                                                                        </div>
                                                                    {{-- </label> --}}
                                                                @endforeach
                                                            </div>
                                                            @error('uploadDestinationSlider.*') 
                                                                <span class="text-red-500">{{ $message }}</span> 
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload Slider Images</span>
                                                                    <input type="file" wire:model="uploadDestinationSlider" class="file-input" accept="image/*" multiple>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @foreach($day_by_divisions as $division_index=>$division_item)
                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                            <thead class="bg-primary/20">
                                                <tr>
                                                    <th class="!text-center uppercase"><span class="text-xl">Day {{$division_index}} ({{$division_item['division_name']}})</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="grid grid-cols-12 mb-4">
                                                            <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                            <div class="sm:col-span-10 col-span-12">
                                                                <textarea wire:model="day_texts.day_{{ $division_index }}_text" 
                                                                class="form-control form-control-sm" 
                                                                rows="3"
                                                                wire:keyup="UpdateByKeyUp('day_{{ $division_index }}', 'day_{{ $division_index }}_text', $event.target.value)"></textarea>
                                                            </div>
                                                        </div>
                                                    
                                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Day {{$division_index}} in {{$division_item['division_name']}}</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                            <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                                <div class="image-preview-container">
                                                                    {{-- {{dd($dayImages[$index])}} --}}
                                                                    @foreach ($dayImages[$division_index] ?? [] as $img_index=> $img)
                                                                    {{-- <label class="image-preview-label px-1 relative" wire:key="day-image-{{$division_index}}-{{ $img_index }}"> --}}
                                                                        <div class="image-preview peer-checked:border-blue-500 relative !overflow-visible">
                                                                            <!-- Delete Button (Top-Right Corner) -->
                                                                            <button type="button"
                                                                                class="delete-icon"
                                                                                wire:click="deleteDayImage('{{ $img }}', {{ $division_index }})">
                                                                                ✖
                                                                            </button>
                                                                            <!-- Image -->
                                                                            <img src="{{ asset($img) }}" alt="Image Preview" class="image-thumbnail cursor-pointer" wire:click="showImageModal('{{ $img }}')">
                                                                        </div>
                                                                    {{-- </label> --}}
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="md:col-span-2 col-span-12 mb-4">
                                                                <div class="border-l-0 sightseeing_images">
                                                                    <label class="file-upload-container">
                                                                        <span class="choose-text">Upload Day {{$division_index}} Images</span>
                                                                        <input type="file" wire:model="uploadDayImages.{{ $division_index }}" class="file-input" accept="image/*" multiple>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full mt-4">
                                                            <thead class="bg-primary/5">
                                                                <tr>
                                                                    <th class="!text-center uppercase" width="5%">SL No.</th>
                                                                    <th class="!text-center uppercase">ROUTE</th>
                                                                    <th class="!text-center uppercase">SIGHTSEEINGS</th>
                                                                    <th class="!text-center uppercase">ACTIVITY</th>
                                                                    <th class="!text-center uppercase" width="5%">
                                                                        <button type="button" wire:click="OpenNewRouteModal({{$division_index}})" class="ti-btn ti-btn-sm ti-btn-soft-success !border !border-success/20">
                                                                            <i class="fa-solid fa-plus text-lg text-dark"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                             
                                                                @forelse ($division_item['day_route'] as $route_index=>$division_route_item)
                                                                    <tr wire:key="day-{{ $division_index }}-route-{{ $division_route_item['route_service_summary_id'] }}">
                                                                        <td class="!text-center" rowspan="2">
                                                                            <span class="badge bg-primary/10 text-primary">{{$route_index+1}}</span>
                                                                        </td>
                                                                        <td class="!text-center">
                                                                           <span class="uppercase"> {{ $division_route_item['route_name'] }}</span>
                                                                           @if (!empty($division_route_item['route_way_points']))
                                                                                <div class="sortable-list border-2 border-dashed border-gray-400 p-2 rounded-lg bg-white dark:bg-gray-800 shadow-md">
                                                                                    <ul class="list-none space-y-2 space-x-1 text-xs">
                                                                                        @foreach ($division_route_item['route_way_points'] as $way_index => $waypoint)
                                                                                            <li class="draggable-item flex items-center justify-start bg-gray-100 dark:bg-gray-700 p-1 rounded-md cursor-move">
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
                                                                                                <span class="text-gray-600 dark:text-white/70 text-[10px] italic"> {{ ucwords($waypoint['point_name']) }}</span>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            @endif
                                                                        </td>
                                                                        <td class="!text-center align-top">
                                                                            <div class="small-btm">
                                                                                @php
                                                                                    $daySightseeings = isset($division_route_item['day_sightseing'])?collect($division_route_item['day_sightseing'])->pluck('value')->toArray():[];
                                                                                @endphp
                                                                                <span class="badge gap-2 bg-primary/10 text-primary uppercase">Existing Sightseeing</span>
                                                                                <select wire:key="existing-sightseeing-{{$route_index}}-{{ $division_index }}-100" 
                                                                                wire:change="getActivityOrSightseeing('sightseeing',{{$division_index}},{{ $route_index }}, {{ $division_route_item['route_service_summary_id'] }}, $event.target.value, '0', $event.target.selectedOptions[0].getAttribute('data-ticket_price'),'')">
                                                                                     <option value="">Choose an Existing Sightseeing</option>
                                                                                     @forelse ($division_route_item['existing_sightseeings'] as $existing_sightseeing)
                                                                                        @if(!in_array($existing_sightseeing['name'], $daySightseeings))
                                                                                            <option value="{{$existing_sightseeing['name']}}" data-ticket_price="{{round($existing_sightseeing['ticket_price'])}}">{{$existing_sightseeing['name']}} - TP: {{env('DEFAULT_CURRENCY_SYMBOL')}}{{round($existing_sightseeing['ticket_price']) }}</option>
                                                                                        @endif
                                                                                     @empty
                                                                                         <option value="" disabled>No sightseeings available</option>
                                                                                     @endforelse
                                                                                </select>
                                                                             </div>
                                                                            @if(isset($errorSightSeeing[$division_index][$route_index]))
                                                                                <span class="text-red-500">{{ $errorSightSeeing[$division_index][$route_index] }}</span>
                                                                            @endif
                                                                             <!-- Drag & Drop List -->
                                                                             @if(isset($division_route_item['day_sightseing']) && count($division_route_item['day_sightseing'])>0)
                                                                                <div class="sortable-list border-2 border-dashed border-gray-400 p-2 rounded-lg bg-white dark:bg-gray-800 shadow-md">
                                                                                    <ul id="draggable-list" class="space-y-2 space-x-1 text-xs">
                                                                                        @foreach ($division_route_item['day_sightseing'] as $sight_index=>$day_sightseing)
                                                                                            <li class="draggable-item flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-1 rounded-md cursor-move"  wire:key="day-{{ $division_index }}-route-{{ $route_index }}-sightseeing-{{$sight_index}}">
                                                                                                <span class="text-gray-600 dark:text-white/70 text-[10px] italic">{{ucfirst($day_sightseing['value'])}} <strong class="text-blue-600">@if($day_sightseing['price']>0)({{env('DEFAULT_CURRENCY_SYMBOL')}}{{$day_sightseing['price']}})@endif</strong> </span>
                                                                                                <i class="far fa-times-circle text-primary cursor-pointer" wire:click="RemoveDayRouteItem({{$division_index}},{{$day_sightseing['id']}})"></i>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            @endif
                                                                            <div class="small-btm mt-1">
                                                                                <button class="badge gap-2 bg-primary/10 text-primary uppercase"><i class="fa-solid fa-plus"></i> Add New Sightseeing</button>
                                                                            </div>
                                                                        </td>
                                                                        <td class="!text-center align-top">
                                                                            <div class="small-btm">
                                                                                @php
                                                                                    $dayActivities = isset($division_route_item['day_activity'])?collect($division_route_item['day_activity'])->pluck('value')->toArray():[];
                                                                                @endphp
                                                                                <span class="badge gap-2 bg-success/10 text-success uppercase">Existing Activity</span>
                                                                                <select wire:key="existing-activity-{{$route_index}}-{{ $division_index }}-100" 
                                                                                wire:change="getActivityOrSightseeing('activity', {{$division_index}},{{ $route_index }}, {{ $division_route_item['route_service_summary_id'] }}, $event.target.value, $event.target.selectedOptions[0].getAttribute('data-price'), $event.target.selectedOptions[0].getAttribute('data-ticket_price'),'')">
                                                                                    <option value="" hidden>Choose an Existing Activity</option>
                                                                                    @forelse ($division_route_item['existing_activities'] as $existing_activity)
                                                                                    @if(!in_array($existing_activity['name'], $dayActivities))
                                                                                        <option value="{{ $existing_activity['name'] }}" data-price="{{$existing_activity['price']}}" data-ticket_price="{{$existing_activity['ticket_price']}}">
                                                                                            {{ $existing_activity['name'] }} - PP: {{env('DEFAULT_CURRENCY_SYMBOL')}}{{ round($existing_activity['price'] )}} - TP: {{env('DEFAULT_CURRENCY_SYMBOL')}}{{round($existing_activity['ticket_price']) }}
                                                                                        </option>
                                                                                        @endif
                                                                                    @empty
                                                                                        <option value="" disabled>No activities available</option>
                                                                                    @endforelse
                                                                               </select>
                                                                               {{-- <p>cgsjsdshj</p> --}}
                                                                            </div>
                                                                            @if(isset($errorActivity[$division_index][$route_index]))
                                                                                <span class="text-red-500">{{ $errorActivity[$division_index][$route_index] }}</span>
                                                                            @endif
                                                                            <!-- Drag & Drop List -->
                                                                            @if(isset($division_route_item['day_activity']) && count($division_route_item['day_activity'])>0)
                                                                                <div class="sortable-list border-2 border-dashed border-gray-400 p-2 rounded-lg bg-white dark:bg-gray-800 shadow-md">
                                                                                    <ul id="draggable-list" class="space-y-2 space-x-1 text-xs">
                                                                                        @foreach ($division_route_item['day_activity'] as $act_index=>$day_activity)
                                                                                            <li class="draggable-item flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-1 rounded-md cursor-move"  wire:key="day-{{ $division_index }}-route-{{ $route_index }}-activity-{{$act_index}}">
                                                                                                <span class="text-gray-600 dark:text-white/70 text-[10px] italic">{{ucfirst($day_activity['value'])}} <strong class="text-green-600">@if($day_activity['price']>0)({{env('DEFAULT_CURRENCY_SYMBOL')}}{{$day_activity['price']}})@endif</strong> </span>
                                                                                                <i class="far fa-times-circle text-success cursor-pointer" wire:click="RemoveDayRouteItem({{$division_index}},{{$day_activity['id']}})"></i>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            @endif
                                                                            <div class="small-btm mt-1">
                                                                                <button class="badge gap-2 bg-success/10 text-success uppercase"><i class="fa-solid fa-plus"></i> Add New Activity</button>
                                                                            </div>
                                                                        </td>
                                                                        
                                                                        <td class="!text-center" rowspan="2">
                                                                            <button type="button" wire:click="RemoveDayRoute({{$division_index}},'day_route', {{$division_route_item['route_service_summary_id']}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                                                <i class="ti ti-trash"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3" style="border-left: 1px solid;">
                                                                            <div class="small-btm">
                                                                                @php
                                                                                    $dayCabs = isset($division_route_item['day_cab'])?collect($division_route_item['day_cab'])->pluck('value')->toArray():[];
                                                                                @endphp
                                                                                <span class="badge gap-2 bg-warning/10 text-warning uppercase">Existing Cabs</span>
                                                                                <select wire:key="existing-cab-{{$route_index}}-{{ $division_index }}-100" 
                                                                                wire:change="getActivityOrSightseeing('cab',{{$division_index}},{{ $route_index }}, {{ $division_route_item['route_service_summary_id'] }}, $event.target.value, $event.target.selectedOptions[0].getAttribute('data-price'), '0', $event.target.selectedOptions[0].getAttribute('data-id'))">
                                                                                    <option value="">Choose an Existing Cab</option>
                                                                                    @forelse ($division_route_item['existing_cabs'] as $existing_cabs)
                                                                                        @if(!in_array($existing_cabs['name'], $dayCabs))
                                                                                            <option value="{{$existing_cabs['name']}}" data-id="{{$existing_cabs['id']}}" data-price="{{$existing_cabs['price']}}">{{$existing_cabs['name']}} </option>
                                                                                        @endif
                                                                                    @empty
                                                                                        <option value="" disabled>No cabs available</option>
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                            @if(isset($errorCab[$division_index][$route_index]))
                                                                                <span class="text-red-500">{{ $errorCab[$division_index][$route_index] }}</span>
                                                                            @endif
                                                                            <div class="transport_cab">
                                                                                {{-- <span class="badge gap-2 bg-primary/10 text-primary uppercase">Cab</span> --}}
                                                                                <div class="image-preview-container">
                                                                                    @if(isset($division_route_item['day_cab']) && count($division_route_item['day_cab'])>0)
                                                                                        @forelse ($division_route_item['day_cab'] as $cab_index=> $day_cab)
                                                                                        <div class="custom-card cab-card" wire:key="day-{{ $division_index }}-route-{{ $route_index }}-cab-{{$cab_index}}">
                                                                                            <div class="custom-hotel-container relative !overflow-visible">
                                                                                                <div class="custom-cab-content">
                                                                                                    <div class="custom-hotel-image-container">
                                                                                                        <div class="custom-image-wrapper" style="width: 95px; height: 50px;">
                                                                                                            <img class="custom-hotel-image" width="95" height="50" src="{{ isset($day_cab['cab']['image']) && $day_cab['cab']['image'] ? asset($day_cab['cab']['image']) : asset('assets/img/cab.png') }}" 
                                                                                                            alt="Cab Image">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="custom-cab-details">
                                                                                                        <div class="custom-hotel-details-top">
                                                                                                            <p class="text-black-600 text-xs">{{ $day_cab['value'] }}</p>
                                                                                                            <div>
                                                                                                                <label class="cab-preview-label relative cursor-pointer">
                                                                                                                    <div class="cab-card">
                                                                                                                        <span class="hotel-name italic text-yellow-600">{{ env('DEFAULT_CURRENCY_SYMBOL') }}{{ $day_cab['price'] }}</span>
                                                                                                                    </div>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                            <!-- Quantity Controls -->
                                                                                                            <div class="flex items-center space-x-2 justify-center">
                                                                                                                <i class="fas fa-minus-circle text-red-500 cursor-pointer text-base"
                                                                                                                    wire:click="decreaseQuantity({{$division_index}},{{$day_cab['id']}})"></i>
                                                                                                                
                                                                                                                <span class="text-sm font-bold">{{$day_cab['value_quantity']}}</span>
                                                                                                                
                                                                                                                <i class="fas fa-plus-circle text-green-500 cursor-pointer text-base"
                                                                                                                    wire:click="increaseQuantity({{$division_index}},{{$day_cab['id']}})"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <i class="far fa-times-circle text-warning cursor-pointer text-xs" wire:click="RemoveDayRouteItem({{$division_index}},{{$day_cab['id']}})"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @empty
                                                                                            <div class="alert alert-warning text-sm italic">
                                                                                                Cab not added yet!
                                                                                            </div>
                                                                                        @endforelse
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                        <td colspan="5">
                                                                            <div class="alert alert-warning text-sm italic">
                                                                                Routes not added yet!
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>

                                                        {{-- Model For New Route  --}}
                                                            <div class="hs-overlay {{$active_new_route_modal==$division_index?"":"hidden"}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_md_width bg-white rounded-lg">
                                                                    <div class="ti-modal-content p-20">
                                                                        <div class="ti-modal-header flex justify-between items-center">
                                                                            <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                                                                <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full "></span>Day {{$division_index}} in {{$division_item['division_name']}}</span>
                                                                            </span> 
                                                                            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none" wire:click="OpenNewRouteModal(0)">
                                                                                <i class="fa-solid fa-xmark text-lg"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="ti-modal-body text-start new-activity">
                                                                            <div class="custom-hotel-container" wire:ignore>
                                                                                <label for="">
                                                                                    <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                                                                                        Routes
                                                                                    </span>
                                                                                </label>
                                                                                <select
                                                                                    class="placeholder:text-textmuted text-sm selected_seasion_type route_select2"
                                                                                    wire:key="routes-{{ $division_index }}-100" wire:change="getRoute({{$division_index}},$event.target.value)">
                                                                                    <option value="" hidden>Choose route</option>
                                                                                    @if (!empty($division_item['division_routes']) && count($division_item['division_routes']) > 0)
                                                                                        @foreach ($division_item['division_routes'] as $routes_index => $route_item)
                                                                                            <option 
                                                                                                value="{{ $route_item['id'] ?? '' }}"
                                                                                                wire:key="routes-{{ $division_index }}-{{ $routes_index }}" {{$route_item['route']?"":"disabled"}}>
                                                                                                {{ $route_item['route'] ? $route_item['route']['route_name']: 'No route found'}}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    @else
                                                                                        <option value="" disabled>No hotels available</option>
                                                                                    @endif
                                                                                </select>
                                                                                @error('errorRoute.{{$division_index}}') 
                                                                                    <span class="text-red-500">{{ $message }}</span> 
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {{--End Model For New Route  --}}

                                                        {{-- If Itinerary is Post Lead then will show Hotel --}}
                                                        @if($itineraryType=="post_inquiry")
                                                            <div class="mt-4">
                                                                <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small m-2"><i class="fas fa-hotel"></i> Hotel  <span class="custom-header-separator">|</span> 1 Night<span class="custom-header-separator">|</span> in {{$division_item['division_name']}}</span>
                                                                <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                                    <div class="md:col-span-8 col-span-12 mb-4 mx-2 itinerary-build">
                                                                        
                                                                        @forelse ($division_item['day_hotel'] as $division_hotel_item)
                                                                            <div class="custom-card mt-2" wire:key="day-{{ $division_index }}-hotel-{{ $division_hotel_item['hotel_id'] }}">
                                                                                <div class="custom-hotel-container relative !overflow-visible">
                                                                                    <div class="custom-hotel-content">
                                                                                        <div class="custom-hotel-image-container">
                                                                                            {{-- <p class="custom-hotel-rating">4.2<small>/5</small></p> --}}
                                                                                            <div class="custom-image-carousel">
                                                                                                <div class="custom-image-wrapper" style="width: 225px; height: 120px;">
                                                                                                    <img class="custom-hotel-image" width="225" height="120" 
                                                                                                        src="{{$division_hotel_item['hotel_image']?asset($division_hotel_item['hotel_image']):asset('build/assets/images/logo/hotel.jpg')}}" 
                                                                                                        alt="Hotel Image">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                        <div class="custom-hotel-details">
                                                                                            <div class="custom-hotel-details-top">
                                                                                                <p class="text-black-600 text-base italic">{{$division_hotel_item['hotel_name']}}</p>
                                                                                                <p class="text-gray-500 text-small">{{$division_hotel_item['hotel_address']}}</p>
                                                                                                <p class="badge gap-2 bg-danger/10 text-danger uppercase text-small my-2">Rooms</p>
                                                                                                <div>
                                                                                                    @forelse ($division_hotel_item['hotel_rooms'] as $room_index=> $room)
                                                                                                        <label class="hotel-preview-label relative cursor-pointer">
                                                                                                            <input 
                                                                                                                type="radio"
                                                                                                                name="selected_day_wise_itinerary_hotel.{{ $division_index }}.room"
                                                                                                                value="{{ $room->id ?? '' }}" 
                                                                                                                class="hidden peer"
                                                                                                                wire:change="updateSelectedRoom({{$division_hotel_item['hotel_id']}},{{ $division_index }}, {{ $room->id }})">
                                                                                                            <!-- Hotel Selection Box -->
                                                                                                            <div class="hotel-card">
                                                                                                                <span class="hotel-name">{{$room->room_name}}</span>
                                                                                                                <!-- Selected Indicator -->
                                                                                                                <span class="checkmark">✓</span>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                    @empty
                                                                                                        <div class="alert alert-warning text-sm italic">
                                                                                                            rooms not added on this hotel
                                                                                                        </div>
                                                                                                    @endforelse
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button type="button" wire:click="RemoveDayHotel({{$division_index}},'day_hotel', {{$division_hotel_item['hotel_id']}})" class="delete-icon">✖
                                                                                    </button>
                                                                                </div>
                                                                                @if(isset($selected_rooms[$division_index]))
                                                                                    @php
                                                                                        $selectedRoomId = $selected_rooms[$division_index] ?? null;
                                                                                        $selectedRoom = collect($division_hotel_item['hotel_rooms'])->firstWhere('id', $selectedRoomId);
                                                                                    @endphp
                                                                                    @if ($selectedRoom)
                                                                                        <div class="room-details-card mt-2">
                                                                                            <div class="text-center uppercase">
                                                                                                <p class="">{{ $selectedRoom->room_name ?? 'N/A' }}</p>
                                                                                            </div>

                                                                                            {{-- Error  --}}
                                                                                            @if(!empty($errorRoom[$division_index])) 
                                                                                                <div class="alert alert-warning text-sm italic">
                                                                                                    {{ $errorRoom[$division_index] }}
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    @endif
                                                                                @endif
                                                                                
                                                                            </div>
                                                                        @empty
                                                                            <div class="custom-card">
                                                                                <div class="alert alert-warning text-sm italic">
                                                                                    Hotel not added yet!
                                                                                </div>
                                                                            </div>
                                                                        @endforelse
                                                                        
                                                                        
                                                                    </div>
                                                                    <div class="md:col-span-4 col-span-12 mb-4 mx-2 itinerary-build">
                                                                        <div class="custom-card">
                                                                            <div class="custom-hotel-container" wire:ignore>
                                                                                <label for="">
                                                                                    <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                                                                                        Hotels
                                                                                    </span>
                                                                                </label>
                                                                                <select
                                                                                    class="placeholder:text-textmuted text-sm selected_seasion_type select2" data-id="{{$division_index}}" 
                                                                                    wire:key="hotel-{{ $division_index }}-100">
                                                                                    <option value="" hidden>Choose hotel</option>
                                                                                    @if (!empty($division_item['division_hotels']) && count($division_item['division_hotels']) > 0)
                                                                                        @foreach ($division_item['division_hotels'] as $hotel_index => $hotel_item)
                                                                                            <option 
                                                                                                value="{{ $hotel_item['id'] ?? '' }}"
                                                                                                wire:key="hotel-{{ $division_index }}-{{ $hotel_index }}">
                                                                                                {{ $hotel_item['name'] ?? 'No Name' }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    @else
                                                                                        <option value="" disabled>No hotels available</option>
                                                                                    @endif
                                                                                </select>
                                                                                @error('errorHotel.{{$division_index}}') 
                                                                                    <span class="text-red-500">{{ $message }}</span> 
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Livewire Modal -->
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
            wire:click="closeModal">

            <div class="relative bg-white p-4 rounded-lg shadow-lg max-w-2xl w-full"
                wire:click.stop> <!-- Prevent closing when clicking inside -->
                <!-- Close Button -->
                <button class="delete-icon" wire:click="closeModal">✖</button>

                <!-- Display Image -->
                <img src="{{ asset($modalImage) }}" class="w-full h-auto rounded-md">
            </div>
        </div>
    @endif

    <div wire:loading class="loader" wire:target="addAboutDescHighlight, ItineraryImageDelete, deleteDayImage, showImageModal, OpenNewRouteModal, RemoveDayRouteItem,RemoveDayRoute,RemoveDayHotel, closeModal, getActivityOrSightseeing, getRoute, uploadMainBanner, main_banner, uploadDestinationSlider, removeAboutDescHighlight,getHotel,updateSelectedRoom,decreaseQuantity,increaseQuantity">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
<!-- Include Dragula JS -->
<script src="{{ asset('build/assets/libs/dragula/dragula.min.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Apply Dragula to the list
        dragula([document.getElementById('draggable-list')]);
    });
</script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
        $('.select2').on('change', function (e) {
            var value = $(this).select2("val");
            var index = $(this).data("id");
            @this.call('getHotel', index,value);
        });
    });
</script>
