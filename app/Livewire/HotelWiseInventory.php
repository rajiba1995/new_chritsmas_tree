<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Repositories\CommonRepository;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Inventory;
use App\Models\Room;
use App\Models\HotelPolicy;
use App\Models\HotelSeasionTime;
use App\Models\DestinationSeasonPeriod;
use App\Models\HotelPriceChart;
use App\Models\DateWiseHotelPrice;
use Carbon\Carbon;
use App\Helpers\CustomHelper;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;

class HotelWiseInventory extends Component
{
    public $destinations;
    public $divisions = [];
    public $hotelCategories = [];
    public $hotels = [];
    public $dateRange = [];
    public $dateRange2 = [];
    public $selectedDestination = null;
    public $selectedDivision = null;
    public $selectedCategory = null;
    public $selectedHotelName = null;
    public $selectedHotel = null;
    public $selectedHotelDestination = null;
    public $start_date = null;
    public $end_date = null;
    public $currentMonth;
    public $currentYear;
    public $activeMonth;
    public $room_category = null;
    public $activeButtonid = 'second';
    public $single_booking_modal = 0;
    public $activeAccordionId = null;
    public $activeSecondAccordionId = null;
    public $activeAccordionAddonId = null;
    public $activeAddonItem = null;
    public $activeBlockRequesttype = null;
    public $price_chart = [];
    public $hotel_seasion_times = null;
    public $room_plan_items = [];
    public $selectedRoomId = null;
    public $hotel_seasion_item_type = null;
    public $selected_plan_item_price = 0;
    public $hotel_addon_plan_title = [];
    public $hotel_addon_plan_items = [];
    public $extra_days_status = 1; // Default status
    public $showPrevButton = false;
    public $showNextButton = true;
    public $ignore_weekdays = [];
    public $ignore_othersdays = [];
    public $room_wise_quantity = [];
    public $selected_room_id = [];
    public $selected_room_item = [];
    public $selected_room_item_name = [];
    public $selected_room_item_checked = [];
    public $selected_trigger_point = null;
    public $block_request_type = 1;
    public $selected_inventory_type = 1;
    public $fresh_block_request_type = 1;
    public $fresh_single_value = 0;
    public $single_selected_room_name = null;
    public $single_selected_date = null;
    public $single_selected_room_id = null;
    public $activeViewSummary = 0;
    public $activeViewSummaryCallender = 0;
    public $summary_calendar = [];


    protected $commonRepository;

    public function mount(CommonRepository $commonRepository, $oldDivision = null, $oldDestination = null)
    {
        $this->commonRepository = $commonRepository;
        $this->destinations = $this->commonRepository->getAllActiveState();
        $this->divisions = City::where('status', 1)
            ->where('id', $oldDivision)
            ->pluck('name', 'id')
            ->toArray();
        $this->selectedDivision = $oldDivision ?: null;
        $this->selectedDestination = $oldDestination ?: null;
        $this->extra_days_status = 0;

        // Load initial hotel categories and hotels if old selections exist
        if ($this->selectedDestination) {
            $this->loadInitialHotelData();
        }
        $this->dispatch('load_editor');
    }

    public function loadInitialHotelData()
    {
        $this->hotelCategories = Hotel::where('destination', $this->selectedDestination)
            ->join('categories', 'hotel_category', '=', 'categories.id')
            ->select('categories.id', 'categories.name')
            ->orderBy('categories.name', 'ASC')
            ->groupBy('categories.id')
            ->pluck('categories.name', 'categories.id')
            ->toArray();

        $this->hotels = Hotel::where('destination', $this->selectedDestination)
            ->orderBy('name', 'ASC')
            ->pluck('name', 'id')
            ->toArray();
    }

    public function updatedSelectedDestination($destinationId)
    {
        $this->GetDivisions($destinationId);
    }

    public function GetDivisions($destinationId)
    {
        $this->selectedDivision = null;
        $this->dateRange=[];
        $this->divisions = City::where('state_id', $destinationId)
            ->pluck('name', 'id')
            ->toArray();

        $this->hotelCategories = Hotel::where('destination', $destinationId)
            ->join('categories', 'hotel_category', '=', 'categories.id')
            ->select('categories.id', 'categories.name')
            ->orderBy('categories.name', 'ASC')
            // ->groupBy('hotel_category')
            ->pluck('categories.name', 'categories.id')
            ->toArray();

        $this->hotels = Hotel::where('destination', $destinationId)
        ->pluck('name', 'id')
        ->toArray();
    }

    public function loadCategories($divisionId)
    {
        $this->selectedCategory = null;
        $this->dateRange=[];
       
        $this->hotels = Hotel::where('division', $divisionId)
            ->orderBy('name', 'ASC')
            ->pluck('name', 'id')
            ->toArray();

        $this->hotelCategories = Hotel::where('division', $divisionId)
            ->join('categories', 'hotel_category', '=', 'categories.id')
            ->select('categories.id', 'categories.name')
            ->orderBy('categories.name', 'ASC')
            ->pluck('categories.name', 'categories.id')
            ->toArray();
    }

    public function loadHotels($categoryId)
    {
        $this->selectedHotel = null;
        $this->dateRange=[];
        $this->hotels = Hotel::where('hotel_category', $categoryId)
            ->pluck('name', 'id')
            ->toArray();
    }
    public function FilterDate($start_date, $end_date, $hotel_id){
        // Initialize dateRange as an empty array before populating it
        $this->dateRange = [];
       
        $this->start_date = $start_date;
        $this->end_date = $end_date;

        $this->selectedHotel = $hotel_id;
        $hotel = Hotel::where('id', $hotel_id)->first();
        $this->selectedHotelName = $hotel ? $hotel->name : null;
        $this->selectedHotelDestination = $hotel ? $hotel->destination : null;


        if(!empty($this->start_date) && !empty($this->end_date)){
          
            $this->extra_days_status = 1;
            $this->currentMonth = Carbon::parse($this->start_date)->month;
            $this->currentYear = Carbon::parse($this->start_date)->year;
         
            $this->generateDateRange();
            $this->generateCalendar($start_date, $end_date);
           
            // Check if hotel_id is empty
            if (empty($this->selectedHotel)) {
                $this->dateRange = [];
                session()->flash('error', '🔔 Attention: Please select a hotel first before proceeding with your search.');
                return;
            }
          

            $this->room_category = Room::where('hotel_id', $this->selectedHotel)->orderBy('room_name', 'ASC')->get();

            $this->RoomCatWisePriceChart($this->selectedRoomId);

            $start = \Carbon\Carbon::parse($this->start_date);
            $end = \Carbon\Carbon::parse($this->end_date);
    
            while ($start->lte($end)) { // Loop until the start date is less than or equal to the end date
                $this->dateRange[]= $start->format('Y-m-d'); // Format as "Sun 01 Dec"
                $start->addDay(); // Increment the date by one day
            }

            // Get Release Trigger days
           $this->selected_trigger_point = Hotel::where('id', $this->selectedHotel)->value('release_trigger');
        }else{
            session()->flash('error', '🚨 Oops! Start Date and End Date are required. Please select both to proceed.');
            return;
        }
    }

    public function RoomCatWisePriceChart($room_id=null, $hotel_seasion_item_type=null){
        $this->selectedRoomId = $room_id;
        $hotel = Hotel::find($this->selectedHotel);
        $this->hotel_seasion_times = DestinationSeasonPeriod::with('season')->where('destination_id', $hotel->destination)
        ->where(function ($query) {
            $query->whereBetween('start_date', [date('m-d',strtotime($this->start_date)), date('m-d',strtotime($this->end_date))])
                  ->orWhereBetween('end_date', [date('m-d',strtotime($this->start_date)), date('m-d',strtotime($this->end_date))])
                  ->orWhere(function ($query) {
                      $query->where('start_date', '<=', date('m-d',strtotime($this->start_date)))
                            ->where('end_date', '>=', date('m-d',strtotime($this->end_date)));
                  });
        })
        ->first();

        if($this->hotel_seasion_times){
           $this->hotel_seasion_item_type = $hotel_seasion_item_type;
            // price_chart_type_id = 2 // Selling Price Chart
            $this->room_plan_items = HotelPriceChart::select(
                'hotel_price_charts.id as hotel_price_charts_id',
                'hotel_price_charts.room_id',
                'hotel_price_charts.plan_title',
                'hotel_price_charts.plan_item',
                'hotel_price_charts.item_price'
            )
            ->join('hotel_price_chart_types', function ($join) {
                $join->on('hotel_price_charts.hotel_id', '=', 'hotel_price_chart_types.hotel_id')
                     ->on('hotel_price_charts.room_id', '=', 'hotel_price_chart_types.room_id');
            })
            ->where('hotel_price_chart_types.type', 2) // Selling Price Chart
            ->where('hotel_price_charts.item_price', '>', 0)
            ->where('hotel_price_charts.hotel_id', $this->selectedHotel)
            ->where('hotel_price_charts.room_id', $this->selectedRoomId)
            ->where('hotel_price_charts.plan_title', $this->hotel_seasion_times->season->title)
            ->orderBy('hotel_price_charts.plan_item','ASC')->get()
            ->toArray();
            if (count($this->room_plan_items)>0) {
                foreach ($this->room_plan_items as $key=> $item) {
                    if ($item['plan_item'] === 'CP') {
                        $this->selected_plan_item_price = (int) $item['item_price'];
                    }
                }
                foreach ($this->room_plan_items as $key=> $item) {
                    if ($item['plan_item'] === $hotel_seasion_item_type) {
                        $this->selected_plan_item_price = (int) $item['item_price'];
                    }
                }
               
            }

        }
    }
    public function RoomWiseAddonPriceChart($room_id){
        $hotel = Hotel::find($this->selectedHotel);
        $existing_season_times = DestinationSeasonPeriod::with('seasion')
        ->where('destination_id', $hotel->destination)
        ->get()
        ->map(function ($item) {
            return $item->seasion->title ?? null; // Handle cases where `seasion` might be null
        })
        ->filter() // Removes null values if any
        ->toArray();
    
        // Getting Add on plans 
        $this->hotel_addon_plan_title = HotelPriceChart::where('hotel_id', $this->selectedHotel)->where('room_id', $room_id)->whereNotIn('plan_title', $existing_season_times)->groupBy('plan_title')->pluck('plan_title')->toArray();
    }

    public function accordionItem($id){
        // Toggle active accordion item
        if ($this->activeAccordionId === $id) {
            $this->activeAccordionId = null; // Collapse if the same item is clicked again
        } else {
            $this->activeAccordionId = $id; // Set the clicked item as active
        }
        $this->RoomCatWisePriceChart($id);
        $this->RoomWiseAddonPriceChart($id);
    }
    public function accordionAddonItem($room_id, $sl){
        // Toggle active accordion item
        if ($this->activeAccordionAddonId === $room_id && $this->activeAddonItem == $sl) {
            $this->activeAccordionAddonId = null; // Collapse if the same item is clicked again
            $this->activeAddonItem = null; // Collapse if the same item is clicked again
        } else {
            $this->activeAccordionAddonId = $room_id; // Set the clicked item as active
            $this->activeAddonItem = $sl; // Set the clicked item as active
        }
    }
    public function AppendAddOnPrice($room_id, $item, $price){
        $this->dispatch('append_addOn_price', ['room_id' => $room_id, 'item'=>$item, 'price'=>$price]);
    }

    public function DateWisePriceUpdate($room_id, $hotel_id, $date, $item_title, $value){
        
        if ($value === null || $value === '') {
            // You can return or handle this case to avoid inserting invalid data
            $value = 0;
        }
        $insert = DateWiseHotelPrice::updateOrCreate(
            [
                'hotel_id' => $hotel_id,
                'room_id' => $room_id,
                'date' => date('Y-m-d', strtotime($date)),
                'item_title' => $item_title,
            ],
            [
                'item_price' => $value, // Corrected: removed extra space after 'item_price'
            ]
        );
    }

    public function BlockSingleRequestItem($date, $value, $room_name, $room_id){
        $this->single_selected_room_name = $room_name;
        $this->single_selected_room_id = $room_id;
        $this->single_selected_date = $date;
        $this->fresh_single_value = $value;
        $this->single_booking_modal = 1;
        $this->dispatch('ResetSelectedValue', ['value' => $value ]);
    }
    public function CloseBlockSingleModal(){
        $this->single_booking_modal = 0;
    }
    public function handleBlockTypeChange($type)
    {
        $this->single_booking_modal = 1;
        $this->fresh_block_request_type = $type;
    }
    public function DateWiseInventoryUpdate($room_id, $date, $value){
        // Update or create the inventory record
        // dd($this->fresh_block_request_type);
        $type= $this->fresh_block_request_type;
        if ($value === null || $value === '') {
            // You can return or handle this case to avoid inserting invalid data
            $value = 0;
        }
        if ($room_id === null || $room_id === '') {
            session()->flash('single_error', 'Please try again!.');
            return;
        }
        $store = Inventory::updateOrCreate(
            [
                'hotel_id' => $this->selectedHotel,
                'room_id' => $room_id,
                'date' => $date,
            ],
            [
                'total_unsold' => $value,
                'block_request_type' => $this->fresh_block_request_type,
            ]
        );
        $this->single_booking_modal = 0;
        // Return the updated or created record
        session()->flash('success', '🔔 Inventory updated successfully!');
        return $store;
    }

    public function FilterRoomCatgeory($hotel_seasion_item_type){
        $this->RoomCatWisePriceChart($this->selectedRoomId, $hotel_seasion_item_type);
    }

    // public function scrollable($direction)
    // {
    //     // You can log or process the direction if needed
    //     $this->scroll_direction = $direction;
    //   // Dispatch a browser event to notify the frontend to show an alert
    //   $this->dispatch('inventory-scroller', ['message' => 'Scrolling to: ' . $direction]);
    // }

    public function TabChange($value){
        $this->FilterDate($this->start_date, $this->end_date, $this->selectedHotel);

        if ($value === 'second') {
            $this->activeViewSummary = 1;
            $this->activeViewSummaryCallender = 0;
            $this->activeButtonid = 'first'; // Collapse if the same item is clicked again
           $this->toggleExtraDays();
        } else {
            $this->toggleExtraDays();
            $this->activeViewSummary = 0;
            $this->activeViewSummaryCallender = 0;
            $this->activeButtonid = 'second'; // Set the clicked item as active
        }
        $this->dispatch('resetCheckboxes');
        $this->dispatch('resetItemCheckboxes');

        $this->selected_room_id = [];
        $this->selected_room_item_checked = [];
        $this->selected_room_item = [];
        $this->selected_room_item_name = [];
    }
    public function OpenViewSummary(){
        $this->activeViewSummary = 1;
        $this->activeViewSummaryCallender = 1;
        $this->generateCalendar($this->start_date, $this->end_date);
        $this->dispatch('resetCheckboxes');
        $this->dispatch('resetItemCheckboxes');

        $this->selected_room_id = [];
        $this->selected_room_item_checked = [];
        $this->selected_room_item = [];
        $this->selected_room_item_name = [];
    }

    public function generateCalendar($start_date, $end_date)
    {
        // Parse the start and end dates
        $start = Carbon::parse($start_date)->startOfMonth();
        $end = Carbon::parse($end_date)->endOfMonth();

        // Create an array to store the calendar data
        $calendar = [];

        // Iterate through each month between start and end dates
        while ($start <= $end) {
            $month = $start->format('F Y'); // e.g., "January 2025"
            $daysInMonth = $start->daysInMonth;

            $monthData = [];
            for ($day = 1; $day <= $daysInMonth; $day++) {
                $date = $start->copy()->day($day);
                $inventoryData = CustomHelper::GetDateWiseHotelAllInventory($this->selectedHotel,$date->format('Y-m-d'));
                $monthData[] = [
                    'date' => $date->format('Y-m-d'),
                    'day_name' => $date->format('D'), // e.g., "Mon"
                    'day_number' => $date->format('d'), // e.g., "01"
                    'inventory'=>$inventoryData
                ];
            }

            $calendar[$month] = $monthData;

            // Move to the next month
            $start->addMonth()->startOfMonth();
        }
        $this->summary_calendar = $calendar;
    }
    // Second Tab
   public function SecondAccordionItem($id){
        // Toggle active accordion item
        if ($this->activeSecondAccordionId === $id) {
            $this->activeSecondAccordionId = null; // Collapse if the same item is clicked again
        } else {
            $this->activeSecondAccordionId = $id; // Set the clicked item as active
        }
        $this->RoomCatWisePriceChart($id);
        $this->RoomWiseAddonPriceChart($id);
        $this->extra_days_status = 1;

    }
    public function toggleExtraDays()
    {
        // Toggle the status
        $this->extra_days_status = $this->extra_days_status == 1 ? 2 : 1;
        // Generate the date range only if the dropdown is being shown
        if ($this->extra_days_status == 2) {
            $this->generateDateRange();
        }
    }

    public function updateMonth($increment)
    {
        $this->currentMonth += $increment;
        if ($this->currentMonth > 12) {
            $this->currentMonth = 1;
            $this->currentYear++;
        } elseif ($this->currentMonth < 1) {
            $this->currentMonth = 12;
            $this->currentYear--;
        }
        $this->generateDateRange();
        $this->updateButtonVisibility();
    }

    private function updateButtonVisibility()
    {
        $startDate = Carbon::parse($this->start_date);
        $endDate = Carbon::parse($this->end_date);

        $currentDate = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $this->activeMonth = $currentDate->format('M Y');
        $this->showPrevButton = $currentDate->greaterThan($startDate);
        $this->showNextButton = $currentDate->lessThan($endDate->startOfMonth());
    }

    private function generateDateRange()
    {
        $startOfMonth = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $this->activeMonth = $startOfMonth->format('M Y');

        $endOfMonth = $startOfMonth->copy()->endOfMonth();
    
        // Adjust to the constraints of $start_date and $end_date
        $rangeStart = Carbon::parse($this->start_date);
        $rangeEnd = Carbon::parse($this->end_date);
    
        // Clip the range to avoid exceeding the bounds
        $startOfMonth = $startOfMonth->greaterThan($rangeStart) ? $startOfMonth : $rangeStart;
        $endOfMonth = $endOfMonth->lessThan($rangeEnd) ? $endOfMonth : $rangeEnd;
    
        $this->dateRange2 = [];
        while ($startOfMonth <= $endOfMonth) {
            $this->dateRange2[] = $startOfMonth->format('Y-m-d');
            $startOfMonth->addDay();
        }
    }
    public function toggleRoomWiseQuantity($roomId, $index)
    {
        // If the room is unchecked, reset its quantity to null
        if (!in_array($roomId, $this->selected_room_id)) {
            $this->room_wise_quantity[$index] = 0;
            $this->activeSecondAccordionId = null; // Collapse if the same item is clicked again
        }else{
            $this->activeSecondAccordionId = $roomId; // Set the clicked item as active
        }
        $this->RoomCatWisePriceChart($roomId);
        $this->RoomWiseAddonPriceChart($roomId);
        $this->extra_days_status = 1;
    }
    protected function filterDates($start_date,$end_date, $ignore_weekdays,$ignore_othersdays){
        // Parse start and end dates
        $startDate = Carbon::parse($start_date);
        $endDate = Carbon::parse($end_date);

        // Generate all dates in the range
        $allDates = CarbonPeriod::create($startDate, $endDate);

        // Convert ignore_weekdays into a numerical representation
        $ignoreWeekdays = array_map(function ($day) {
            return Carbon::parse($day)->dayOfWeek; // "Mon" -> 1 (Carbon dayOfWeek)
        }, $ignore_weekdays);

        // Filter out the dates
        $filteredDates = [];
        foreach ($allDates as $date) {
            $dayOfWeek = $date->dayOfWeek; // Numeric representation of the day (0=Sun, 1=Mon, ...)
            $formattedDate = $date->format('Y-m-d');

            // Skip if the day is in ignore_weekdays or the exact date is in ignore_othersdays
            if (in_array($dayOfWeek, $ignoreWeekdays) || in_array($formattedDate, $ignore_othersdays)) {
                continue;
            }

            $filteredDates[] = $formattedDate;
        }
        return $filteredDates;
    }

   
    public function UpdateInventory(){
        // dd($this->selected_room_id);
        DB::beginTransaction();

        try {
           
            if($this->selected_inventory_type==1){
                $filteredDates = $this->filterDates($this->start_date,$this->end_date, $this->ignore_weekdays,$this->ignore_othersdays);
            }else{
                if(empty($this->ignore_othersdays)){
                    session()->flash('store_error', '🔔 Please select at least one date for Fresh Blocking.');
                    $this->dispatch('resetCheckboxes');
                    return;
                }
                $filteredDates = $this->ignore_othersdays;
            }
             // dd($this->selected_room_item, $this->selected_room_item_checked);
             if(empty($this->selected_room_id)){
                session()->flash('store_error', '🔔 Please select at least one hotel room to proceed.');
                $this->dispatch('resetCheckboxes');
                return;
            }
       
            foreach($this->selected_room_id as $k=>$room_id){
                // Step 1
                  
                // Retrieve the room name for the error message
                $room_name = Room::where('id', $room_id)->value('room_name');
                if (empty($this->room_wise_quantity[$room_id])) {
                    // Flash the error message to the session
                    session()->flash('store_error', "🔔 Please choose a booking quantity for room $room_name to proceed.");
                    // $this->dispatch('resetCheckboxes');
                    return;
                }
                
                // Step 2
                
                if(!empty($this->selected_room_item_checked)){
                    foreach ($this->selected_room_item as $room => $items) {
                        // Initialize selected_room_item_checked for the room_id
                        if (!isset($this->selected_room_item_checked[$room])) {
                            $this->selected_room_item_checked[$room] = [];
                        }
                    
                        foreach ($items as $index => $item) {
                            // Set default to false if not already set
                            if (!isset($this->selected_room_item_checked[$room][$index])) {
                                $this->selected_room_item_checked[$room][$index] = false;
                            }
                        }
                        // Sort the indices in ascending order
                        ksort($this->selected_room_item_checked[$room]);
                    }
                    $criteria = [
                        'hotel_id' => $this->selectedHotel,
                        'room_id' => $room_id,
                    ];

                    // Delete all matching records for the filtered dates
                    DateWiseHotelPrice::where($criteria)
                    ->whereIn('date', $filteredDates)
                    ->delete();
                    foreach($this->selected_room_item_checked[$room_id] as $k2=>$item_checked){
                      
                        if ($item_checked==true) {
                            // Checking for null or 0
                            if (empty($this->selected_room_item[$room_id][$k2]) || $this->selected_room_item[$room_id][$k2] == 0) {
                                $item_name = $this->selected_room_item_name[$room_id][$k2];
                                $this->dispatch('resetItemCheckboxes');
                                session()->flash('store_error', "🔔 Please provide a valid amount for the selected item ($item_name) in room $room_name.");
                                return;
                            }
                            // filter Date from ignore date
                            // dd($filteredDates);
                            if(count($filteredDates)>0){
                                // Insert or update section
                                foreach($filteredDates as $date){
                                    // Define the criteria for the records to delete
                                    // Create a new record
                                    DateWiseHotelPrice::create([
                                        'hotel_id' => $this->selectedHotel,
                                        'room_id' => $room_id,
                                        'date' => date('Y-m-d', strtotime($date)),
                                        'item_title' => $this->selected_room_item_name[$room_id][$k2],
                                        'item_price' => (int) $this->selected_room_item[$room_id][$k2],
                                    ]);
                                }
                            }else{
                                session()->flash('store_error', "🔔 Please choose a booking date first to proceed.");
                                $this->dispatch('resetCheckboxes');
                                $this->dispatch('resetItemCheckboxes');
                                return; 
                            } 
                        }
        
                    }
                }else{
                    // Flash the error message to the session
                    session()->flash('store_error', "🔔 Please choose a booking item for room $room_name to proceed.");
                    $this->dispatch('resetItemCheckboxes');
                    return; 
                }
                
            }

            // Filter out elements with a value of 0
            $this->room_wise_quantity = array_filter($this->room_wise_quantity, function ($value) {
                return $value !== 0;
            });
            if(count($this->room_wise_quantity)>0){
                foreach($this->room_wise_quantity as $index=>$quantity){
                    foreach($filteredDates as $date){
                        $Inventory = Inventory::where('hotel_id', $this->selectedHotel)
                        ->where('room_id', $index)
                        ->where('date', date('Y-m-d', strtotime($date)))
                        ->first();
                    
                        if ($Inventory) {
                            // Update the total unsold quantity
                            $Inventory->total_unsold += (int) $quantity;
                            $Inventory->block_request_type = $this->block_request_type;
                            $Inventory->save();
                        } else {
                            // Handle the case where no inventory record exists
                            Inventory::create([
                                'hotel_id' => $this->selectedHotel,
                                'room_id' => $index,
                                'date' => date('Y-m-d', strtotime($date)),
                                'total_unsold' => (int) $quantity,
                                'block_request_type' => $this->block_request_type
                            ]);
                        }
                    }
                }
                
            }

            // Commit the transaction if all operations succeed
            
            DB::commit();

            $this->selected_room_id = [];
            $this->selected_room_item_checked = [];
            $this->selected_room_item = [];
            $this->selected_room_item_name = [];
            $this->room_category = Room::where('hotel_id', $this->selectedHotel)->orderBy('room_name', 'ASC')->get();
            $this->TabChange('first');
            session()->flash('success', '🔔 Inventory updated successfully!');

        } catch (\Exception $e) {
            // If any exception occurs, rollback all database changes
            DB::rollBack();

            // Flash the error message
            session()->flash('store_error', "🔔 Error updating inventory: " . $e->getMessage());
            $this->dispatch('resetCheckboxes');
            $this->dispatch('resetItemCheckboxes');
        }
    }
    public function ReleaseTriggerUpdate($hotel_id, $value){
        Hotel::updateOrCreate(
            [
                'id' => $hotel_id,  // Ensure the hotel_id is matched
            ],
            [
                'release_trigger' => (int) $value,  // Add new value
            ]
        );
        $this->FilterDate($this->start_date, $this->end_date, $this->selectedHotel);
    }

    public function GetRoomItemMaxPrice($index, $selected_plan_item_price, $room_id, $item_title){

       $item_price = CustomHelper::GetHotelWiseMaxPrice($selected_plan_item_price, $room_id, $item_title, $this->start_date, $this->end_date);
        // Update the Livewire property for the corresponding room item
        $this->selected_room_item[$room_id][$index] = $item_price;
       // Dispatch the event with the necessary data
        $this->dispatch('ResetItemPrice', [
            'price' => $item_price,
            'room_id' => $room_id,
            'index' => $index
        ]);
    }

    public function GetInventoryType($value){
        $this->selected_inventory_type = $value;
    }

    public function render()
    {
        return view('livewire.hotel-wise-inventory');
    }
}
