<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Repositories\CommonRepository;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\HotelSeasionTime;
use App\Models\HotelPriceChart;
use App\Models\DateWiseHotelPrice;
use Carbon\Carbon;

class HotelWiseInventory extends Component
{
    public $destinations;
    public $divisions = [];
    public $hotelCategories = [];
    public $hotels = [];
    public $dateRange = [];
    public $selectedDestination = null;
    public $selectedDivision = null;
    public $selectedCategory = null;
    public $selectedHotel = null;
    public $start_date = null;
    public $end_date = null;
    public $currentMonth;
    public $currentYear;
    public $activeMonth;
    public $room_category = null;
    public $activeButtonid = 'second';
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
        if(!empty($this->start_date) && !empty($this->end_date)){
          
            $this->extra_days_status = 1;
            $this->currentMonth = Carbon::parse($this->start_date)->month;
            $this->currentYear = Carbon::parse($this->start_date)->year;
         
            $this->generateDateRange();
           
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
        }else{
            session()->flash('error', '🚨 Oops! Start Date and End Date are required. Please select both to proceed.');
            return;
        }
    }

    public function RoomCatWisePriceChart($room_id=null, $hotel_seasion_item_type=null){
        $this->selectedRoomId = $room_id;
        $this->hotel_seasion_times = HotelSeasionTime::where('hotel_id', $this->selectedHotel)
        ->where(function ($query) {
            $query->whereBetween('start_date', [$this->start_date, $this->end_date])
                  ->orWhereBetween('end_date', [$this->start_date, $this->end_date])
                  ->orWhere(function ($query) {
                      $query->where('start_date', '<=', $this->start_date)
                            ->where('end_date', '>=', $this->end_date);
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
            ->where('hotel_price_charts.plan_title', $this->hotel_seasion_times->seasion_type)
            ->orderBy('hotel_price_charts.plan_item','ASC')->get()
            ->toArray();
            if (count($this->room_plan_items)>0) {
                foreach ($this->room_plan_items as $key=> $item) {
                    if ($item['plan_item'] === 'CP') {
                        $this->selected_plan_item_price = $item['item_price'];
                    }
                }
                foreach ($this->room_plan_items as $key=> $item) {
                    if ($item['plan_item'] === $hotel_seasion_item_type) {
                        $this->selected_plan_item_price = $item['item_price'];
                    }
                }
               
            }

        }
    }
    public function RoomWiseAddonPriceChart($room_id){
        $existing_seasion_times = HotelSeasionTime::where('hotel_id', $this->selectedHotel)->pluck('seasion_type')->toArray();
        // Getting Add on plans 
        $this->hotel_addon_plan_title = HotelPriceChart::where('hotel_id', $this->selectedHotel)->where('room_id', $room_id)->whereNotIn('plan_title', $existing_seasion_times)->groupBy('plan_title')->pluck('plan_title')->toArray();
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
        if ($value === 'second') {
            $this->activeButtonid = 'first'; // Collapse if the same item is clicked again
           $this->toggleExtraDays();
        } else {
            $this->toggleExtraDays();
            $this->activeButtonid = 'second'; // Set the clicked item as active
        }
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
    
        $this->dateRange = [];
        while ($startOfMonth <= $endOfMonth) {
            $this->dateRange[] = $startOfMonth->format('Y-m-d');
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

    public function UpdateInventory(){
        if(empty($this->selected_room_id)){
            session()->flash('store_error', '🔔 Please select at least one hotel room to proceed.');
            return;
        }
        foreach($this->selected_room_id as $k=>$room_id){
            // Step 1
            // Retrieve the room name for the error message
            $room_name = Room::where('id', $room_id)->value('room_name');
            if (empty($this->room_wise_quantity[$room_id])) {
              
                // Flash the error message to the session
                session()->flash('store_error', "🔔 Please choose a booking quantity for room $room_name to proceed.");
                return;
            }
            // Step 2
            if(!empty($this->selected_room_item_checked)){
                $this->selected_room_item_checked[$room_id] = collect($this->selected_room_item_checked[$room_id])->values()->all();
                foreach($this->selected_room_item_checked[$room_id] as $k2=>$item_checked){
                    if ($item_checked==true) {
                    // Checking for null or 0
                        if (empty($this->selected_room_item[$room_id][$k2]) || $this->selected_room_item[$room_id][$k2] == 0) {
                            $item_name = $this->selected_room_item_name[$room_id][$k2];
                            session()->flash('store_error', "🔔 Please provide a valid amount for the selected item ($item_name) in room $room_name.");
                            return;
                        }
                        // filter Date from ignore date
                        // dd($this->start_date,$this->end_date, $this->ignore_weekdays, $this->ignore_othersdays);
    
                        // Insert or update section
                        // $insert = DateWiseHotelPrice::updateOrCreate(
                        //     [
                        //         'hotel_id' => $hotel_id,
                        //         'room_id' => $room_id,
                        //         'date' => date('Y-m-d', strtotime($date)),
                        //         'item_title' => $item_title,
                        //     ],
                        //     [
                        //         'item_price' => $value, // Corrected: removed extra space after 'item_price'
                        //     ]
                        // );
                    }
    
                }
            }
            
        }
        
        $this->selected_room_id = [];
        $this->selected_room_item_checked = [];
        $this->selected_room_item = [];
        $this->selected_room_item_name = [];
        $this->room_category = Room::where('hotel_id', $this->selectedHotel)->orderBy('room_name', 'ASC')->get();
        // dd($this->selected_room_id,$this->room_wise_quantity);
    }

    public function render()
    {
        return view('livewire.hotel-wise-inventory');
    }
}
