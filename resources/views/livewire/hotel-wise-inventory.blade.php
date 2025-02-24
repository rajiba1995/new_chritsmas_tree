<div wire:loading.class="opacity-100">

<div class="date-pick-row !mb-3">
    <div class="inputs-wrapper">
        <x-form-field 
            type="select" 
            name="destination" 
            label="Destination" 
            :options="$destinations->pluck('name', 'id')->toArray()"  
            :value="old('destination')" 
            wire:model="selectedDestination"
            wire:change="GetDivisions($event.target.value)" 
            class="placeholder:text-textmuted text-sm selected_seasion_type"
            :selectedText="'Choose Destination'"
        />
        <!-- Division Select -->
        <x-form-field 
            type="select" 
            name="division" 
            label="Division" 
            :options="$divisions"  
            :value="old('division')" 
            wire:model="selectedDivision" 
            wire:change="loadCategories($event.target.value)" 
            class="placeholder:text-textmuted text-sm selected_seasion_type"
            :selectedText="'Choose Division'"
        />
        <!-- Hotel Category Select -->
        <x-form-field 
            type="select" 
            name="hotel_category" 
            label="Category" 
            :options="$hotelCategories" 
            :value="old('hotel_category')" 
            wire:model="selectedCategory" 
            wire:change="loadHotels($event.target.value)" 
            class="placeholder:text-textmuted text-sm selected_seasion_type"
            :selectedText="'Choose Category'"
        />
        <!-- Hotels Select -->
        <x-form-field 
            type="select" 
            name="hotel" 
            label="Hotel" 
            :options="$hotels" 
            :value="old('hotel', $selectedHotel)" 
            wire:change="FilterDate(startDate.value, endDate.value, $event.target.value)"
            wire:model="selectedHotel" 
            class="placeholder:text-textmuted text-sm selected_seasion_type"
            :selectedText="'Choose Hotel'"
        />
    </div>
</div>

<div class="date-pick-row !mb-3">
    <div class="inputs-wrapper">
        <label for="startDate" class="customDatePicker">
            <input type="date" id="startDate" class="dateInput" wire:change="FilterDate($event.target.value, endDate.value, hotel.value)" value="{{$start_date}}" min="{{date('Y-m-d')}}">
            <span>{{$start_date?date('F d, Y',strtotime($start_date)):"Start Date"}}</span>
        </label>
        &nbsp; - &nbsp;
        <label for="endDate" class="customDatePicker">
            <input type="date" id="endDate" class="dateInput" wire:change="FilterDate(startDate.value, $event.target.value, hotel.value)" value="{{$end_date}}" min="{{date('Y-m-d')}}">
            <span>{{$end_date?date('F d, Y',strtotime($end_date)):"End Date"}}</span>
        </label>
    </div>
</div>
@if(count($dateRange)>0)
    <div class="date-pick-row !mb-3">
        <button class="badge rounded-full bg-light text-dark mb-1 ammenity_icon fs-15 {{ $activeButtonid == 'second' && $activeViewSummary == 0 ? 'active' : 'hidden' }}" wire:click="OpenViewSummary()"><i class="ri-eye-line pr-0.5"></i>View Summary</button>
        <button class="ti-btn-primary-full !py-1 pt-0 ti-btn-wave inventory_btn me-[0.375rem] {{ $activeButtonid == 'second' ? 'active' : 'hidden' }}" wire:click="TabChange('second')"><i class="fa-solid fa-plus"></i>Upload Your Inventory</button>
    </div>
@endif
<div class="date-pick-row !mb-3">
    <button class="ti-btn-danger-full ti-btn-wave inventory_btn me-[0.375rem] {{ $activeButtonid == 'first' ? 'active' : 'hidden' }}" id="back_to_step1" wire:click="TabChange('first')"><i class="fa-solid fa-caret-left"></i>Back</button>
</div>

@if(count($dateRange)>0)
    @if($activeViewSummaryCallender==1)
    <div class="summary_calendar_wrap">
        @forelse ($summary_calendar as $month => $days)
            <div class="extra-drop summary_calendar">
                <div class="calender_header">
                    <span>{{ $month }}</span>
                </div>
                <ul>
                    @foreach ($days as $day)
                        <li class="summary-calendar-days">
                            <label for="exd{{ str_replace('-', '', $day['date']) }}" class="custom-exd type1">
                                <input type="checkbox" 
                                    id="exd{{ str_replace('-', '', $day['date']) }}" value="{{ $day['date'] }}">
                                <div class="exd-text">
                                    <span>{{ $day['day_name'] }}</span>
                                    <span>{{ $day['day_number'] }}</span>
                                </div>
                                @if($day['inventory']['total_unsold'] > 0)
                                    <span class="inventory-summary-count-{{ $day['inventory']['block_request_type'] == 1 ? 'green' : 'blue' }}">
                                        {{ $day['inventory']['total_unsold'] }}
                                    </span>
                                @endif
                            
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        @empty
            <div class="alert alert-danger">
                <p>No date found.</p>
            </div>
        @endforelse
    </div>
    @else
    {{-- Dynamic from here --}}
    <div id="step1" class="{{ $activeButtonid == 'second' ? 'active' : 'hidden' }}">
        <div class="top-cta-row">
            <div class="cta-block">
                <div class="col2">
                    <label class="cta-label">Bulk Blocking</label>
                    <div class="cta-row">
                        <button type="button" class="yellow" id="button_test" onclick="openModal('bulk_booking')">Availability Mail</button>
                        <div class="btn-dropdown">
                            <button type="button" class="btn-drop yellow" onclick="BlockRequestItem('yellow')">
                                Block Request
                                <img src="{{asset('build/assets/images/inventory/down-angle.png')}}">
                            </button>
                            <div id="bulk_block_request"  class="dropbox yellow">
                                <label for="yellowhardBlock1" class="radio-label">
                                    <input type="radio" id="yellowhardBlock1" name="hsblock1">
                                    Hard Block
                                </label>
                                <label for="yellowsoftBlock1" class="radio-label">
                                    <input type="radio" id="yellowsoftBlock1" name="hsblock1">
                                    Soft Block
                                </label>
                                <button type="button" class="btn-send">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- bulk booking mail --}}
                <div id="bulk_booking" class="hs-overlay hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" onclick="closeModal('bulk_booking')">
                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg" onclick="event.stopPropagation()">
                        <div class="ti-modal-content p-20">
                            <div class="ti-modal-header">
                                <h6 class="ti-modal-title">demo
                                </h6>
                            </div>
                            <div class="ti-modal-body text-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-block">
                <div class="col1">
                    <button type="button" class="btn-filter">
                        <img src="{{asset('build/assets/images/inventory/calendar.png')}}" alt="calendar">
                    </button>
                </div>
                <div class="col2">
                    <label class="cta-label">Fresh Block</label>
                    <div class="cta-row">
                        <button type="button" class="green">Availability Mail</button>
                        <div class="btn-dropdown">
                            <button type="button" class="btn-drop green" onclick="BlockRequestItem('green')">
                                Block Request
                                <img src="{{asset('build/assets/images/inventory/down-angle.png')}}">
                            </button>
                            <div id="fresh_block_request" class="dropbox green">
                                <label for="hardBlock1" class="radio-label">
                                    <input type="radio" id="hardBlock1" name="hsblock1">
                                    Hard Block
                                </label>
                                <label for="softBlock1" class="radio-label">
                                    <input type="radio" id="softBlock1" name="hsblock1">
                                    Soft Block
                                </label>
                                <button type="button" class="btn-send">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fresh booking mail --}}
                <div id="bulk_booking" class="hs-overlay hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" onclick="closeModal('bulk_booking')">
                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg" onclick="event.stopPropagation()">
                        <div class="ti-modal-content p-20">
                            <div class="ti-modal-header">
                                <h6 class="ti-modal-title">demo
                                </h6>
                            </div>
                            <div class="ti-modal-body text-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-block">
                <div class="col2">
                    <label class="cta-label">Release Trigger</label>
                    <div class="cta-row">
                        <button type="button" class="yellow">Policy</button>
                        <button type="button" class="yellow">D-
                            <x-input-field 
                                type="text" 
                                name="release_trigger_point" 
                                wire:model="release_trigger_point" 
                                wire:keyup="ReleaseTriggerUpdate({{$selectedHotel}}, $event.target.value)" 
                                placeholder="0"
                                class="release_trigger_point" 
                                value="{{$selected_trigger_point}}" 
                                wire:loading.class="opacity-100"
                                onkeyup="validateNumber(this)"
                                />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div id="single_booking_request" class="hs-overlay {{$single_booking_modal==0?'hidden':''}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"  wire:click="CloseBlockSingleModal()">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_sm_width bg-white rounded-lg" onclick="event.stopPropagation()">
                    <div class="ti-modal-content p-20">
                        <div class="ti-modal-header">
                            <span class="badge bg-primary/10 text-primary">{{$single_selected_room_name}}</span>
                            <span class="badge bg-danger/10 text-danger" id="single_appended_date">{{$single_selected_date}}</span>
                            <input type="hidden" id="single_appended_room_id" value="{{$single_selected_room_id}}">
                        </div>
                        <div class="ti-modal-body text-start">
                            <div id="single_block_request">
                                <label for="singlehardBlock" class="radio-label">
                                    <input type="radio" name="fresh_block_request_type" id="singlehardBlock"  wire:model="fresh_block_request_type" value="1" {{$fresh_block_request_type==1?"checked":""}}  wire:change="handleBlockTypeChange(1)">
                                    Hard Block
                                </label>
                                <label for="singlesoftBlock" class="radio-label">
                                    <input type="radio" name="fresh_block_request_type" id="singlesoftBlock" wire:model="fresh_block_request_type" value="2" {{$fresh_block_request_type==2?"checked":""}}  wire:change="handleBlockTypeChange(2)">
                                    Soft Block
                                </label>
                                <input type="text" wire:model="fresh_single_value" id="single_appended_value" value="{{$fresh_single_value}}" onkeyup="validateSingleItems(this)">
                                <button type="button" class="btn-save" id="single_request_submit" wire:click="DateWiseInventoryUpdate({{$single_selected_room_id}},'{{$single_selected_date}}', {{$fresh_single_value}})">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block">
            
            <div class="calendar-row">
                <div class="left-col">
                    <img src="{{asset('build/assets/images/inventory/calendar.png')}}" alt="calendar">
                </div>
                <div class="right-col">
                    <ul class="date-holder scrollable">
                    
                        @foreach ($dateRange as $date_item)
                        @php
                            $date_parts = date("D d M", strtotime($date_item));
                            $date_details = explode(" ",$date_parts);
                        @endphp
                            <li><span>{{$date_details[0]}}</span><span>{{$date_details[1]}}</span><span>{{$date_details[2]}}</span></li>
                        @endforeach
                    </ul>
                    <div id="inventory_scroll">
                        <button id="scrollLeft" class="scroll-button" onclick="scrollable('left')">&#11104;</button>
                        <button id="scrollRight" class="scroll-button" onclick="scrollable('right')">&#11106;</button>
                    </div>
                </div>
            </div>
            <div class="accordion">
                @forelse ($room_category as $room)
                    <div class="accordion-item">
                        <div class="accordion-header {{ $activeAccordionId == $room->id ? 'active' : '' }}">
                            <div class="header-left" wire:click="accordionItem({{$room->id}})">
                                <span class="badge bg-primary/10 text-primary">{{$room->room_name}}</span>
                                <img src="{{asset('build/assets/images/inventory/up-arrow.png')}}" alt="">
                            </div>
                            <div class="header-right">
                                <ul class="count-input-holder scrollable">
                                    @foreach ($dateRange as $date_item)
                                    @php
                                        $inventoryData = App\Helpers\CustomHelper::GetDateWiseHotelInventory($selectedHotel,$room->id,$date_item)
                                    @endphp
                                    <li class="inventory_count">
                                        <input type="text" value="{{$inventoryData['total_unsold']}}" placeholder="0" class="count-{{$inventoryData['block_request_type']}}"  @if($inventoryData['total_unsold'] == 0)  wire:click="BlockSingleRequestItem('{{$date_item}}', {{$inventoryData['total_unsold']}},'{{$room->room_name}}',{{$room->id}})" @endif readonly>
                                        <span class="info active">0 Sold</span><span class="info">D {{$selected_trigger_point}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-body {{ $activeAccordionId == $room->id ? 'active' : '' }}">
                            <div class="content-wrap">
                                {{-- Checking first seasion time asigned or not --}}
                                @if($hotel_seasion_times)
                                    @if(count($room_plan_items)>0)
                                    <div class="left">
                                        <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                        <div class="left-content">
                                            <div class="block">
                                                
                                                <select class="badge gap-2 bg-primary/10 text-primary" name="plan_items" wire:change="FilterRoomCatgeory($event.target.value)">
                                                    @foreach ($room_plan_items as $plan_item_key =>$plan_items)
                                                        <option value="{{$plan_items['plan_item']}}" {{$plan_items['plan_item']=="CP"?"selected":""}}>{{$plan_items['plan_item']}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="2 Person"><span class="badge bg-outline-primary">2<img src="{{asset('build/assets/images/inventory/user.png')}}" alt="person"></span></label>
                                                <label class="2 Person"><span class="badge bg-outline-primary">1<img src="{{asset('build/assets/images/inventory/user.png')}}" alt="person"></span></label>
                                                <p class="badge bg-danger/10 text-danger custom_button_text">{{$hotel_seasion_times->seasion_type}}</p>
                                            </div>
                                            <div class="block">
                                                @forelse ($hotel_addon_plan_title as $k =>$addon_plan_titles)
                                                    <label><span class="badge bg-outline-primary cursor-pointer">{{$addon_plan_titles}}</span></label>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        <p>No add-on items have beed added yet.</p>
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="right-content">
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    @foreach ($dateRange as $date_item)
                                                        <li>
                                                            <x-input-field 
                                                                type="text" 
                                                                name="plan_item_price" 
                                                                wire:model="plan_item_price.{{ $date_item }}" 
                                                                wire:keyup="DateWisePriceUpdate({{$room->id}},{{$selectedHotel}},'{{$date_item}}','2 Person', $event.target.value)" 
                                                                placeholder="0" 
                                                                value="{{ App\Helpers\CustomHelper::GetDateWiseHotelPrice($selected_plan_item_price,$room->id,'2 Person',$date_item) }}" 
                                                                wire:loading.class="opacity-100"
                                                                onkeyup="validateNumber(this)"
                                                                />
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <ul class="count-input-holder">
                                                    @foreach ($dateRange as $date_item)
                                                        <li><x-input-field type="text" name="plan_item_price"  wire:model="plan_item_price.{{ $date_item }}" 
                                                            wire:keyup="DateWisePriceUpdate({{$room->id}},{{$selectedHotel}},'{{$date_item}}','1 Person', $event.target.value)" placeholder="0" value="{{ App\Helpers\CustomHelper::GetDateWiseHotelPrice(0,$room->id,'1 Person',$date_item) }}" wire:loading.class="opacity-100" onkeyup="validateNumber(this)"/></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="inputs-rows scrollable">
                                                @forelse ($hotel_addon_plan_title as $addon_key =>$addon_plan_titles)
                                                    <ul class="count-input-holder">
                                                        @foreach ($dateRange as $date_item)
                                                            <li>
                                                                <x-input-field 
                                                                    type="text"
                                                                    name="addon-plan-item-price"
                                                                    class="addon-plan-item-price-{{$room->id}}-{{$addon_key}}"
                                                                    wire:model="plan_item_price.{{ $date_item }}" 
                                                                    wire:keyup="DateWisePriceUpdate({{$room->id}},{{$selectedHotel}},'{{$date_item}}','{{$addon_plan_titles}}', $event.target.value)"
                                                                    placeholder="0" 
                                                                    value="{{ App\Helpers\CustomHelper::GetDateWiseHotelPrice(0,$room->id,$addon_plan_titles,$date_item) }}"
                                                                    wire:loading.class="opacity-100"
                                                                    onkeyup="validateNumber(this)"
                                                                />
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @empty
                                                    <div class="alert alert-danger">
                                                        <p>No add-on items have been added yet.</p>
                                                    </div>
                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                    @else
                                        <div class="left left-content">
                                        </div>
                                        <div class="right-content">
                                            <div class="my-4">
                                                    <p>No plan item selling price have been assigned to this room category: <strong>{{ $room->room_name }}</strong> 
                                                        <a href="{{ route('admin.destination_wise_season') }}" class="badge bg-danger/10 text-danger custom_button_text">
                                                            Click here to add plan item price
                                                        </a>
                                                    </p>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="left left-content">
                                    </div>
                                    <div class="right-content">
                                        <div class="my-4">
                                                <p>No seasion dates have been assigned to this hotel yet. 
                                                    <a href="{{ route('admin.destination_wise_season') }}" class="badge bg-danger/10 text-danger custom_button_text">
                                                        Click here to add seasion date range
                                                    </a>
                                                </p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- Content to display if $room_category is empty -->
                    <div class="alert alert-danger">
                        <p>No room found. 
                            <a href="{{ route('admin.hotel.edit', $selectedHotel) }}" class="badge bg-primary/10 text-primary custom_button_text">
                                Click here to add a room
                            </a>
                        </p>
                    </div>
                @endforelse
                
            </div>
        </div>
    </div>
    
    <div id="step2" class="{{ $activeButtonid == 'first' ? 'active' : 'hidden' }}">
        <select 
            id="go_to_step2" 
            wire:model="selected_inventory_type" 
            wire:change="GetInventoryType($event.target.value)" 
            class="form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 form-control inventory_filter 
                {{$selected_inventory_type == 1 ? 'active_bulk' : 'active_fresh'}}">
            <option value="1">Bulk Blocking</option>
            <option value="2">Fresh Blocking</option>
        </select>

        <div class="grid grid-cols-12 gap-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box custom-box">
                    <div class="box-body">
                        @if (session('store_error'))
                            <div class="alert alert-danger">
                                {{ session('store_error') }}
                            </div>
                        @endif
                        <div class="top-cta-row">
                        
                            <div class="column2">
                                @if($selected_inventory_type==1)
                                <label>Weekdays (7)</label>
                                @endif
                                <div class="bottom-row">
                                    @if($selected_inventory_type==1)
                                    <ul class="days-holder">
                                        <!--<li><button type="button" class="btn-day selected">S</button></li>-->
                                        <li>
                                            <label for="daycheck1" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays" 
                                                wire:model="ignore_weekdays" 
                                                id="daycheck1" value="Sun"/>
                                                <span>S</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck2" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays" 
                                                wire:model="ignore_weekdays" 
                                                id="daycheck2" value="Mon"/>
                                                <span>M</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck3" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays"  
                                                wire:model="ignore_weekdays"
                                                id="daycheck3" value="Tue"/>
                                                <span>T</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck4" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays" 
                                                wire:model="ignore_weekdays" 
                                                id="daycheck4" value="Wed"/>
                                                <span>W</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck5" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays" 
                                                wire:model="ignore_weekdays" 
                                                id="daycheck5" value="Thu"/>
                                                <span>T</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck6" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays" 
                                                wire:model="ignore_weekdays" 
                                                id="daycheck6" value="Fri"/>
                                                <span>F</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="daycheck7" class="custom-day-check">
                                                <x-input-field 
                                                type="checkbox" 
                                                name="ignore_weekdays"  
                                                wire:model="ignore_weekdays"
                                                id="daycheck7" value="Sat"/>
                                                <span>S</span>
                                            </label>
                                        </li>
                                    </ul>
                                    @endif
                                    <div class="extra-days">
                                        <button class="btn-extra" wire:click="toggleExtraDays">
                                            View Calendar
                                            <img src="{{asset('build/assets/images/inventory/down-angle.png')}}">
                                        </button>
                                        <div id="extra_drop" class="extra-drop {{$extra_days_status==2?"active":"hide"}}">
                                            <div class="calender_header">
                                                <span>{{$activeMonth}}</span>
                                            </div>
                                            <ul>
                                                @foreach ($dateRange2 as $date_item)
                                                <li>
                                                    <label for="exd{{ date('dmy', strtotime($date_item)) }}" class="custom-exd">
                                                        <input 
                                                            type="checkbox" 
                                                            name="ignore_othersdays[]" 
                                                            wire:model="ignore_othersdays" 
                                                            id="exd{{ date('dmy', strtotime($date_item)) }}" 
                                                            value="{{ $date_item }}" 
                                                            {{ in_array($date_item, $ignore_othersdays ?? []) ? 'checked' : '' }}>

                                                        <div class="{{$selected_inventory_type==1?"exd-text":"green-text"}}">
                                                            <span>{{ date('D', strtotime($date_item)) }}</span>
                                                            <span>{{ date('d', strtotime($date_item)) }}</span>
                                                        </div>
                                                    </label>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="cta">
                                                @if($showPrevButton)
                                                    <button type="button" class="btn-prev btn-back" wire:click="updateMonth(-1)">Previous</button>
                                                @endif
                                                @if($showNextButton)
                                                    <button type="button" class="btn-next btn-save" wire:click="updateMonth(1)">Next</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column3 block_btn">
                                <button type="button" class="btn-save" onclick="BlockRequestItem('update')">Block</button>
                                <div id="update_block_request" class="dropbox green update_block_request">
                                    <label for="hardBlock2" class="radio-label">
                                        <input type="radio" id="hardBlock2" name="block_request_type" wire:model="block_request_type" {{$block_request_type==1?"checked":""}} value="1">
                                        Hard Block
                                    </label>
                                    <label for="softBlock2" class="radio-label">
                                        <input type="radio" id="softBlock2" name="block_request_type" wire:model="block_request_type" {{$block_request_type==2?"checked":""}} value="2">
                                        Soft Block
                                    </label>
                                    <button type="button" class="btn-save" wire:click="UpdateInventory()" >Save</button>
                                    @if (session('single_error'))
                                        <div class="badge bg-danger/10 text-danger">
                                            {{ session('single_error') }}
                                        </div>
                                    @endif
                                
                                </div>
                            </div>
                        </div>
                        
                        <div class="bottom-content">
                            <div class="accordion">
                                @forelse ($room_category as $index=> $room)
                                    <div class="accordion-item">
                                        <div class="accordion-header {{ $activeSecondAccordionId == $room->id ? 'active' : '' }}">
                                            <span class="badge bg-primary/10 text-primary" wire:click="SecondAccordionItem({{$room->id}})">{{$room->room_name}} <img src="{{asset('build/assets/images/inventory/up-arrow.png')}}" alt=""></span>
                                            @if(in_array($room->id, $selected_room_id))
                                                <x-input-field 
                                                    type="text" 
                                                    name="room_wise_quantity[{{$room->id}}]" 
                                                    class="green" 
                                                    id="room_wise_quantity_{{ $room->id }}" 
                                                    wire:model="room_wise_quantity.{{ $room->id }}" 
                                                    placeholder="0"
                                                    onkeyup="validateNumber(this)"
                                                    value=""
                                                />
                                            @endif
                                        <!-- Checkbox -->
                                            <x-input-field 
                                            type="checkbox" 
                                            name="selected_room_id[]" 
                                            value="{{ $room->id }}" 
                                            class="accordion_check_input" 
                                            wire:model="selected_room_id" 
                                            wire:change="toggleRoomWiseQuantity({{ $room->id }}, {{ $index }})" />

                                        </div>
                                        <div class="accordion-body {{ $activeSecondAccordionId == $room->id ? 'active' : '' }}">
                                            @if($hotel_seasion_times)
                                                @if(count($room_plan_items)>0)
                                                    <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                                    <table>
                                                        <tr>
                                                            <td valign="top">
                                                                {{-- <span class="badge gap-2 bg-primary/10 text-primary">CP</span> --}}
                                                                <select class="badge gap-2 bg-primary/10 text-primary" name="plan_items" wire:change="FilterRoomCatgeory($event.target.value)">
                                                                    @foreach ($room_plan_items as $plan_item_key =>$plan_items)
                                                                        <option value="{{$plan_items['plan_item']}}" {{$plan_items['plan_item']=="CP"?"selected":""}}>{{$plan_items['plan_item']}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="badges-wrapper">
                                                                    <label><span class="badge bg-outline-primary">2<img src="{{asset('build/assets/images/inventory/user.png')}}" alt="person"></span></label>
                                                                    <label><span class="badge bg-outline-primary">1<img src="{{asset('build/assets/images/inventory/user.png')}}" alt="person"></span></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <!-- Text Input -->
                                                                        @php
                                                                            $this->selected_room_item_name[$room->id][0] = '2 Person';
                                                                        @endphp
                                                                        <input 
                                                                            type="text" 
                                                                            name="selected_room_item[{{ $room->id }}][0]" 
                                                                            wire:model="selected_room_item.{{ $room->id }}.0"
                                                                            onkeyup="validateItems(this)">
                                                                        
                                                                        <!-- Checkbox -->
                                                                        <x-input-field 
                                                                            type="checkbox" 
                                                                            name="selected_room_item_checked[{{ $room->id }}][0]" 
                                                                            class="accordion_check_input" 
                                                                            wire:model="selected_room_item_checked.{{ $room->id }}.0"
                                                                            wire:change="GetRoomItemMaxPrice(0, {{$selected_plan_item_price}}, {{$room->id}}, '2 Person')"
                                                                        />
                                                                    </li>
                                                                
                                                                    <li>
                                                                        <!-- Text Input -->
                                                                        @php
                                                                        
                                                                            $this->selected_room_item_name[$room->id][1] = '1 Person';
                                                                        @endphp
                                                                        <input 
                                                                            type="text" 
                                                                            name="selected_room_item[{{ $room->id }}][1]" 
                                                                            wire:model="selected_room_item.{{ $room->id }}.1"
                                                                            onkeyup="validateItems(this)">
                                                                        
                                                                        <!-- Checkbox -->
                                                                        <x-input-field 
                                                                            type="checkbox" 
                                                                            name="selected_room_item_checked[{{ $room->id }}][1]" 
                                                                            class="accordion_check_input" 
                                                                            wire:model="selected_room_item_checked.{{ $room->id }}.1" 
                                                                            wire:change="GetRoomItemMaxPrice(1, {{$selected_plan_item_price}}, {{$room->id}}, '1 Person')"
                                                                        />
                                                                    </li>
                                                                </ul>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">Add-On</span></td>
                                                            <td>
                                                                @forelse ($hotel_addon_plan_title as $k =>$addon_plan_titles)
                                                                    <label><span class="badge bg-outline-primary cursor-pointer" wire:click="accordionAddonItem({{$room->id}}, {{$k}})">{{$addon_plan_titles}}</span></label>
                                                                    @php
                                                                    $hotel_addon_plan_items = App\Models\HotelPriceChart::where('hotel_id', $selectedHotel)
                                                                        ->where('room_id', $room->id)
                                                                        ->where('plan_title', $addon_plan_titles)
                                                                        ->where('item_price', '>', 0)
                                                                        ->groupBy('plan_item', 'item_price') // Include all columns you want to group
                                                                        ->get(['plan_item', 'item_price']) // Specify the columns explicitly for grouping
                                                                        ->pluck('item_price', 'plan_item') // Use pluck to get 'plan_item' => 'item_price' mapping
                                                                        ->toArray();
                                                                    @endphp
                                                                    <div class="{{ $activeAccordionAddonId == $room->id && $activeAddonItem===$k? 'block' : 'hidden' }}">
                                                                        @forelse ($hotel_addon_plan_items as $addon_plan_item => $addon_plan_price)
                                                                            <label class="cursor-pointer">
                                                                                <input type="radio" name="addon_item_{{ $room->id }}" value="{{ $addon_plan_price }}" wire:change="AppendAddOnPrice({{ $room->id }}, {{ $k }}, {{ $addon_plan_price }})">
                                                                                <span class="text-dark">{{ $addon_plan_item }}</span> 
                                                                                <span class="text-muted"> - {{ $addon_plan_price }}</span>
                                                                            </label>
                                                                        @empty
                                                                            <div class="alert alert-danger">
                                                                                <p>No add-on items have been added yet.</p>
                                                                            </div>
                                                                        @endforelse

                                                                    </div>
                                                                    
                                                                @empty
                                                                    <div class="alert alert-danger">
                                                                        <p>No add-on items have beed added yet.</p>
                                                                    </div>
                                                                @endforelse
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    @php
                                                                        $item_sl = 2; // Initialize item_sl before the loop if not done already
                                                                    @endphp

                                                                    @forelse ($hotel_addon_plan_title as $k => $addon_plan_titles)
                                                                    @php
                                                                        $this->selected_room_item_name[$room->id][$item_sl] = $addon_plan_titles;
                                                                    @endphp
                                                                        <li>
                                                                            <!-- Text Input -->
                                                                            <input 
                                                                                type="text" 
                                                                                name="selected_room_item[{{ $room->id }}][{{ $item_sl }}]" 
                                                                                wire:model="selected_room_item.{{ $room->id }}.{{ $item_sl }}" 
                                                                                class="addon-plan-item-price-{{$room->id}}-{{$k}}" 
                                                                                onkeyup="validateItems(this)" >
                                                                            
                                                                            <!-- Checkbox -->
                                                                            <x-input-field 
                                                                                type="checkbox" 
                                                                                name="selected_room_item_checked[{{ $room->id }}][{{ $item_sl }}]" class="accordion_check_input" 
                                                                                wire:model="selected_room_item_checked.{{ $room->id }}.{{ $item_sl }}"
                                                                                wire:change="GetRoomItemMaxPrice({{$item_sl}}, 0, {{$room->id}}, '{{$addon_plan_titles}}')"
                                                                            />
                                                                        </li>

                                                                        @php
                                                                            $item_sl++;  // Increment item_sl for the next iteration
                                                                        @endphp
                                                                    @empty
                                                                        <div class="alert alert-danger">
                                                                            <p>No add-on items have been added yet.</p>
                                                                        </div>
                                                                    @endforelse


                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                @else
                                                    <div class="left left-content">
                                                    </div>
                                                    <div class="right-content">
                                                        <div class="my-4">
                                                                <p>No plan item selling price have been assigned to this room category: <strong>{{ $room->room_name }}</strong> 
                                                                    <a href="{{ route('admin.destination_wise_season') }}" class="badge bg-danger/10 text-danger custom_button_text">
                                                                        Click here to add plan item price
                                                                    </a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @else
                                                <div class="left left-content">
                                                </div>
                                                <div class="right-content">
                                                    <div class="my-4">
                                                            <p>No seasion dates have been assigned to this hotel yet. 
                                                                <a href="{{ route('admin.destination_wise_season') }}" class="badge bg-danger/10 text-danger custom_button_text">
                                                                    Click here to add seasion date range
                                                                </a>
                                                            </p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @empty
                                <!-- Content to display if $room_category is empty -->
                                <div class="alert alert-danger">
                                    <p>No room found. 
                                        <a href="{{ route('admin.hotel.edit', $selectedHotel) }}" class="badge bg-primary/10 text-primary custom_button_text">
                                            Click here to add a room
                                        </a>
                                    </p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@else
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
@endif
<div wire:loading class="loader">
    <div class="spinner">
    <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
    </div>
</div>
</div>

@section('scripts')
<script src="{{asset('build/assets/libs/inventory.js')}}"></script>
@endsection
