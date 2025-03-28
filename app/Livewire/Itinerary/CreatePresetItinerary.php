<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\Room;
use App\Models\SeasionPlan;
use App\Models\HotelPriceChart;
use App\Models\Hotel;
use App\Models\Category;
use App\Models\DivisionWiseSightseeingImage;
use App\Models\DivisionWiseActivityImage;
use App\Models\Itinerary;
use App\Models\RouteServiceSummary;
use App\Models\ItineraryDetail;
use App\Models\HotelPriceChartType;
use App\Helpers\CustomHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

use App\Models\ItineraryBanner;

class CreatePresetItinerary extends Component
{
    use WithFileUploads;
    public $destinationId;
    public $itineraryType;
    public $itinerary_id;
    public $active_new_route_modal;
    public $selectedDivision;
    public $categoryId;
    public $mainBanner = [];
    public $hotel_room_price = [];
    public $destinationName;
    public $categoryName;
    public $itinerary_syntax;
    public $itinerary_journey;
    public $night;
    public $errorMessage = '';
    public $uploadDestinationSlider = []; 
    public $uploadDayImages = [];
    public $day_by_divisions = [];

    public $selected_rooms = [];
    public $selected_room_plan = [];

    public $showModal = false;
    public $modalImage = '';
    
    public $uploadMainBanner;
    public $name_of_lead, $welcome_to, $main_banner, $about_destination_title, $about_destination_text;
    public $destinationImages = [];
    public $dayImages = [];
    public $dayHotels = [];
    public $day_texts = []; 
    public $selected_day_wise_itinerary = [];
    
    public $selected_about_desc_banners = [];
    public $trip_highlights = []; // Array to store trip highlights

    public $errorRoom = [];
    public $errorHotel = [];
    public $errorRoute = [];
    public $errorActivity = [];
    public $errorSightSeeing = [];
    public $errorCab = [];
    public $leadData;
    public $total_amount = 0;
    public function mount($encryptedId){
        $itineraryExists = Itinerary::find($encryptedId);
        $this->itinerary_id =$encryptedId;
        $this->leadData = $itineraryExists->lead;
        $this->itineraryType =$itineraryExists->type;
        $categoryExists = Category::where('id', $itineraryExists->hotel_category)->first();
        $this->destinationName = $itineraryExists->destination->name;
        $this->categoryName = $categoryExists->name;
        $this->destinationId = $itineraryExists->destination_id;
        $this->categoryId = $itineraryExists->hotel_category;
        $this->itinerary_syntax = $itineraryExists->itinerary_syntax;
        $this->itinerary_journey = $itineraryExists->itinerary_journey;
        $city = City::where('state_id', $itineraryExists->destination_id)->first();
        if($city){
            $this->selectedDivision = $city->id;
        }

        // Get divisions
        $stay_by_journey = explode(',',$itineraryExists->stay_by_journey);
        if(count($stay_by_journey)>0){
            $days_journey = [];
            foreach($stay_by_journey as $k=>$journey){

                $hotels = Hotel::select('id', 'name')
                // ->where('hotel_category', $this->categoryId)
                ->where('division', $journey)->orderBy('name', 'ASC')->get()->toArray();

                $destination_route = RouteServiceSummary::with('route')->where('destination_id', $this->destinationId)->where('service_type', 'Route Wise')->get()->toArray();

                $city = City::find($journey);
                $days_journey[$k+1]['division_id'] = $journey;
                $days_journey[$k+1]['division_name'] = $city?$city->name:"N/A";
                $days_journey[$k+1]['division_hotels'] =$hotels;
                $days_journey[$k+1]['division_routes'] =$destination_route;
                $days_journey[$k+1]['day_hotel'] =$this->loadDayHotels($k+1);
                $days_journey[$k+1]['day_route'] =$this->loadDayRoutes($k+1);
                $this->loadDayImages($k+1);
            }
            $this->day_by_divisions = $days_journey;
        }
        $this->ExistingData();
    }
    // Check Existing Itinerary Details

    public function ExistingData(){
        // Banner section
        $this->name_of_lead = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'name_of_lead')->value('value');
        $this->welcome_to = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'welcome_to')->value('value');
        $this->main_banner = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'main_banner')->value('value');

        // About Destination
        $this->about_destination_title = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'about_destination_title')->value('value');
        $this->about_destination_text = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'about_destination_text')->value('value');
        $this->trip_highlights = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'like', 'trip_highlights_%')->pluck('value')->toArray();

        // Fetch all slider images from DB
        $this->loadDestinationImages();

        // Load Day wise data
        $this->day_texts = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
        ->where('header', 'LIKE', 'day_%')
        ->pluck('value', 'field')
        ->toArray();
    }
    
    public function addAboutDescHighlight()
    {
        $this->trip_highlights[] = ''; // Add an empty input field
    }

    public function removeAboutDescHighlight($index)
    {
        unset($this->trip_highlights[$index]); // Remove highlight
        $this->trip_highlights = array_values($this->trip_highlights); // Re-index array
        $this->deleteHighlightFromDB($index);
    }
    public function deleteHighlightFromDB($index)
    {
        $fieldName = 'trip_highlights_' . $index;
        ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'about_destination')
            ->where('field', $fieldName)
            ->delete();
    }

    public function updatedUploadMainBanner()
    {
        // Validate Image
        DB::beginTransaction();
        try {
            $this->validate([
                'uploadMainBanner' => 'image|max:2048', // 2MB Max
            ]);
            $store = new ItineraryBanner;
            $store->division_id = $this->selectedDivision;
            $store->destination_id = $this->destinationId;

            $uploadedFiles = $this->uploadMainBanner ?? null;
            if ($uploadedFiles) {
                $dynamicText =rand(1111,9999);
                $destinationName = $this->destinationName; // Assuming you have a division name
                $uploadedPath = CustomHelper::uploadImage($uploadedFiles, $dynamicText, $destinationName, 'itinerary_banners');
                $store->image = $uploadedPath;
            }
            $store->save();
            DB::commit();
            session()->flash('success', 'Banner uploaded successfully!');
        } catch (\Exception $e) {
            $this->reset(['uploadMainBanner']);
            DB::rollBack(); // Rollback on error
            session()->flash('error', 'Failed: ' . $e->getMessage());
        }
        
    }
    public function loadDestinationImages() {
        // Fetch all slider images from DB
        $this->destinationImages = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'about_destination')
            ->where('field', 'slider_image')
            ->pluck('value')
            ->toArray();
    }
    public function loadDayImages($index){
        $this->dayImages[$index] = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_image')
            ->pluck('value')
            ->toArray();
    }
    public function loadDayHotels($index){
        // Fetch itinerary detail with hotel relation
        $data = ItineraryDetail::with('hotel')
        ->where('itinerary_id', $this->itinerary_id)
        ->where('header', 'day_' . $index)
        ->where('field', 'day_hotel')
        ->get();

        // Ensure hotel data exists before assigning
        $results = [];
       // Loop through each itinerary detail and extract hotel data
        foreach ($data as $item) {
            if ($item->hotel) {
                $room = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('hotel_id', $item->hotel_id)
                ->where('header', 'day_' . $index)
                ->where('field', 'day_room')
                ->first();
                $selected_room_main_plan = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('hotel_id', $item->hotel_id)
                ->where('header', 'day_' . $index)
                ->where('field', 'day_room_main_plan')
                ->first();

                if($room){
                    $this->selected_rooms[$index] = $room->room_id;
                    $this->FetchRoomPlan($index, $room->room_id);
                }

                $results[] = [
                    'hotel_id'      => optional($item->hotel)->id,
                    'hotel_name'    => optional($item->hotel)->name,
                    'hotel_image'    => optional($item->hotel)->image,
                    'hotel_address' => optional($item->hotel)->address,
                    'hotel_rooms'   => optional($item->hotel)->rooms,
                    'selected_room'   => $room?$room->room_id:null,
                    'selected_room_main_plan' => $selected_room_main_plan?$selected_room_main_plan:null,
                ];
            }
        }
        // dd($results);
        return $results;
        // Merge and assign the updated values
    }
    public function ReloadDayHotels($index){
        // Fetch itinerary detail with hotel relation
        $data = ItineraryDetail::with('hotel')
        ->where('itinerary_id', $this->itinerary_id)
        ->where('header', 'day_' . $index)
        ->where('field', 'day_hotel')
        ->get();

        // Ensure hotel data exists before assigning
        $results = [];
       // Loop through each itinerary detail and extract hotel data
        foreach ($data as $item) {
            if ($item->hotel) {

                $room = ItineraryDetail::with('hotel')
                ->where('itinerary_id', $this->itinerary_id)
                ->where('hotel_id', $item->hotel_id)
                ->where('header', 'day_' . $index)
                ->where('field', 'day_room')
                ->first();

                $selected_room_main_plan = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('hotel_id', $item->hotel_id)
                ->where('header', 'day_' . $index)
                ->where('field', 'day_room_main_plan')
                ->first();


                if($room){
                    $this->selected_rooms[$index] = $room->room_id;
                    $this->FetchRoomPlan($index, $room->room_id);
                }
                
                $results[] = [
                    'hotel_id'      => optional($item->hotel)->id,
                    'hotel_name'    => optional($item->hotel)->name,
                    'hotel_image'    => optional($item->hotel)->image,
                    'hotel_address' => optional($item->hotel)->address,
                    'hotel_rooms'   => optional($item->hotel)->rooms,
                    'selected_room'   => $room?$room->room_id:null,
                    'selected_room_main_plan'   => $selected_room_main_plan?$selected_room_main_plan:null,
                ];
            }
        }

       
        $this->day_by_divisions[$index]['day_hotel'] = $results;
        // Merge and assign the updated values
    }
    public function loadDayRoutes($index){
        // Fetch itinerary detail with hotel relation
        $data = ItineraryDetail::with('route_service')
        ->where('itinerary_id', $this->itinerary_id)
        ->where('header', 'day_' . $index)
        ->where('field', 'day_route')
        ->get();

        // Ensure hotel data exists before assigning
        $results = [];
       // Loop through each itinerary detail and extract hotel data
        foreach ($data as $item) {

            $day_activity = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_activity')
            ->get()->toArray();

            $day_sightseing = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_sightseeing')
            ->get()->toArray();

            $day_cab = ItineraryDetail::with('cab')->where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_cab')
            ->get()->toArray();

            if ($item->route_service) {
                $RouteServiceSummary = RouteServiceSummary::with('activities', 'sightseeings', 'cabs')->find($item->route_service_summary_id);
                $existing_activities = [];
                $existing_sightseeings = [];
                $existing_cabs = [];
                if($RouteServiceSummary){
                    // Existing Activities
                    foreach($RouteServiceSummary->activities as $act_index =>$act_item){
                        $existing_activities[] = [
                            'name'         => optional($act_item->activity)->name,
                            'type'         => optional($act_item->activity)->type,
                            'price'        => optional($act_item->activity)->price,
                            'ticket_price' => optional($act_item->activity)->ticket_price,
                        ];
                    }

                    // // Existing Sightsiings
                    foreach($RouteServiceSummary->sightseeings as $sight_index =>$sight_item){
                        $existing_sightseeings[] = [
                            'name'=> optional($sight_item->sightseeing)->name,
                            'type'         => optional($sight_item->sightseeing)->type,
                            'ticket_price' => optional($sight_item->sightseeing)->ticket_price,
                        ];
                    }

                    // // Existing Cabs
                    foreach($RouteServiceSummary->cabs as $cab_index =>$cab_item){
                        $cab = optional(optional($cab_item->divisionCab)->cab);
                        $existing_cabs[]=[
                            'name'=> $cab->title ? $cab->title . ' (' . $cab->capacity . 'S)' : 'N/A',
                            'id'=> $cab->id ? $cab->id:"",
                            'price'=>$cab_item->cab_price ?? 0,
                        ];
                    }
                }
                $results[] = [
                    'route_service_summary_id'=> optional($item->route_service)->id,
                    'route_name' => $item->value,
                    'route_way_points' => optional(optional($item->route_service)->route)->waypoints?->toArray() ?? [],
                    'day_activity' => $day_activity,
                    'day_sightseing' => $day_sightseing,
                    'day_cab' => $day_cab,
                    'existing_activities' => $existing_activities,
                    'existing_sightseeings' => $existing_sightseeings,
                    'existing_cabs' => $existing_cabs,
                ];
            }
        }
        // dd($results);
        return $results;
        // Merge and assign the updated values
    }
    public function ReloadDayRoute($index){
        // Fetch itinerary detail with hotel relation
        $data = ItineraryDetail::with('hotel')
        ->where('itinerary_id', $this->itinerary_id)
        ->where('header', 'day_' . $index)
        ->where('field', 'day_route')
        ->get();

        // Ensure hotel data exists before assigning
        $results = [];
       // Loop through each itinerary detail and extract hotel data
        foreach ($data as $item) {
            $day_activity = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_activity')
            ->get()->toArray();

            $day_sightseing = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_sightseeing')
            ->get()->toArray();

            $day_cab = ItineraryDetail::with('cab')->where('itinerary_id', $this->itinerary_id)
            ->where('route_service_summary_id', $item->route_service_summary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_cab')
            ->get()->toArray();

            if ($item->route_service) {
                $RouteServiceSummary = RouteServiceSummary::with('activities', 'sightseeings', 'cabs')->find($item->route_service_summary_id);
                $existing_activities = [];
                $existing_sightseeings = [];
                $existing_cabs = [];

                if($RouteServiceSummary){
                    // Existing Activities
                    foreach($RouteServiceSummary->activities as $act_index =>$act_item){
                        $existing_activities[] = [
                            'name'         => optional($act_item->activity)->name,
                            'type'         => optional($act_item->activity)->type,
                            'price'        => optional($act_item->activity)->price,
                            'ticket_price' => optional($act_item->activity)->ticket_price,
                        ];
                    }

                    // // Existing Sightsiings
                    foreach($RouteServiceSummary->sightseeings as $sight_index =>$sight_item){
                        $existing_sightseeings[] = [
                            'name'=> optional($sight_item->sightseeing)->name,
                            'type'         => optional($sight_item->sightseeing)->type,
                            'ticket_price' => optional($sight_item->sightseeing)->ticket_price,
                        ];
                    }

                    // // Existing Cabs
                    foreach($RouteServiceSummary->cabs as $cab_index =>$cab_item){
                        $cab = optional(optional($cab_item->divisionCab)->cab);
                        $existing_cabs[]=[
                            'name'=> $cab->title ? $cab->title . ' (' . $cab->capacity . 'S)' : 'N/A',
                            'id'=> $cab->id ? $cab->id : '',
                            'price'=>$cab_item->cab_price ?? 0,
                        ];
                    }
                }
                $results[] = [
                    'route_service_summary_id'=> optional($item->route_service)->id,
                    'route_name' => $item->value,
                    'route_way_points' => optional(optional($item->route_service)->route)->waypoints?->toArray() ?? [],
                    'day_activity' => $day_activity,
                    'day_sightseing' => $day_sightseing,
                    'day_cab' => $day_cab,
                    'existing_activities' => $existing_activities,
                    'existing_sightseeings' => $existing_sightseeings,
                    'existing_cabs' => $existing_cabs,
                ];
            }
        }

        $this->day_by_divisions[$index]['day_route'] = $results;
        // Merge and assign the updated values
    }


    // public function ReloadDayActivity($index, $route_index, $route_service_summary_id){
    //     // Fetch itinerary detail with hotel relation
    //     $day_activity = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
    //     ->where('route_service_summary_id', $route_service_summary_id)
    //     ->where('header', 'day_' . $index)
    //     ->where('field', 'day_activity')
    //     ->get()->toArray();

    //     $this->day_by_divisions[$index]['day_route'][$route_index]['day_activity'] = $day_activity;
        
    // }
   
    public function updateduploadDestinationSlider()
    {
        // dd($this->uploadDestinationSlider);
        DB::beginTransaction();

        try {
            // Validate each uploaded image
            $this->validate([
                'uploadDestinationSlider.*' => 'image|max:2048', // 2MB max per image
            ]);

            foreach ($this->uploadDestinationSlider as $image) {
                if ($image) {
                    $dynamicText = rand(1111, 9999);
                    $uploadedPath = CustomHelper::uploadImage($image, $dynamicText, $this->destinationName, 'itinerary');

                    // Save file path in database
                    ItineraryDetail::create([
                        'itinerary_id' => $this->itinerary_id,
                        'header' => 'about_destination',
                        'field' => 'slider_image',
                        'value' => $uploadedPath,
                    ]);
                }
            }

            DB::commit();

            // Reload images after upload
            $this->loadDestinationImages();

            session()->flash('success', 'Images uploaded successfully!');
            $this->reset('uploadDestinationSlider'); // Reset input after upload

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Upload failed: ' . $e->getMessage());
        }
    }
    public function updatedUploadDayImages($images, $index)
    {
        // dd($this->uploadDestinationSlider);
        if (!isset($this->uploadDayImages[$index])) {
            $this->uploadDayImages[$index] = [];
        }
        DB::beginTransaction();

        try {
            // Validate each uploaded image
            $this->validate([
                "uploadDayImages.$index.*" => 'image|max:2048', // Validate each image (2MB max)
            ]);

            foreach ($images as $image) {
                if ($image) {
                    $dynamicText = rand(1111, 9999);
                    $uploadedPath = CustomHelper::uploadImage($image, $dynamicText, $this->destinationName, 'itinerary');

                    // Save file path in database
                    ItineraryDetail::create([
                        'itinerary_id' => $this->itinerary_id,
                        'header' => 'day_' . $index,
                        'field' => 'day_image',
                        'value' => $uploadedPath,
                    ]);
                }
            }

            DB::commit();
            // Fetch newly uploaded images
            $this->loadDayImages($index);
            session()->flash('success', 'Images uploaded successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Upload failed: ' . $e->getMessage());
        }
    }
    public function ItineraryImageDelete($slider_image){
        DB::beginTransaction();
    
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('value', $slider_image)
                ->first();
    
            if ($item) {
                // Delete file from storage
                $filePath = $item->value; // Example: "storage/itinerary/west-bangal-5280-20250312093144.jpg"

                // Check if file exists using correct path
                if (Storage::exists(str_replace('storage/', 'public/', $filePath))) {
                    Storage::delete(str_replace('storage/', 'public/', $filePath));
                }
    
                // Delete from database
                $item->delete();
    
                // Reload updated images list
                $this->loadDestinationImages();
    
                DB::commit();
                session()->flash('success', 'Image deleted successfully!');
            } else {
                session()->flash('error', 'Image not found in the database!');
            }
    
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }

    public function RemoveDayHotel($index, $field, $hotel_id){
        DB::beginTransaction();
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', $field)
            ->where('hotel_id', $hotel_id)
            ->first();
            $hotel_details = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('hotel_id', $hotel_id)
            ->get();
    
            if ($item) {
                // Delete from database
                $item->delete();
                if ($hotel_details) {
                    $hotel_details->each(function ($detail) {
                        $detail->delete();
                    });
                }
                DB::commit();
                session()->flash('success', 'Hotel deleted successfully!');
            } else {
                session()->flash('error', 'Hotel not found in the database!');
            }
            $this->ReloadDayHotels($index);
    
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
    public function RemoveDayRoute($index, $field, $route_service_summary_id){
        DB::beginTransaction();
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', $field)
            ->where('route_service_summary_id', $route_service_summary_id)
            ->first();

            $sub_items = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('route_service_summary_id', $route_service_summary_id)
            ->whereIn('field', ['day_cab', 'day_sightseeing', 'day_activity'])
            ->get();

            if ($item) {
                // Delete from database
                $item->delete();
                // Delete multiple records
                $sub_items->each(function ($sub_item) {
                    $sub_item->delete();
                });
                DB::commit();
                session()->flash('success', 'Route deleted successfully!');
            } else {
                session()->flash('error', 'Route not found in the database!');
            }
            $this->ReloadDayRoute($index);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }

    public function RemoveDayRouteItem($index, $id){
        DB::beginTransaction();
        try {
            $item = ItineraryDetail::find($id);
            
            if ($item) {
                $item->delete();
                DB::commit();
                session()->flash('success', 'Item deleted successfully.');
            } else {
                DB::rollBack();
                session()->flash('error', 'Item not found.');
            }
            $this->ReloadDayRoute($index);
            if(isset($item->room_id)){
                $this->ReloadDayHotels($index);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
   
    public function deleteDayImage($imgPath, $index){
        DB::beginTransaction();
    
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_image')
            ->where('value', $imgPath)
            ->first();
    
            if ($item) {
                // Delete file from storage
                $filePath = $item->value; // Example: "storage/itinerary/west-bangal-5280-20250312093144.jpg"

                // Check if file exists using correct path
                if (Storage::exists(str_replace('storage/', 'public/', $filePath))) {
                    Storage::delete(str_replace('storage/', 'public/', $filePath));
                }
    
                // Delete from database
                $item->delete();
    
                 // Refresh images list
                $this->loadDayImages($index);
    
                DB::commit();
                session()->flash('success', 'Image deleted successfully!');
            } else {
                session()->flash('error', 'Image not found in the database!');
            }
    
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
    public function showImageModal($image)
    {
        $this->modalImage = $image;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function getHotel($index,$id){
        try {
            if (!$id) {
                throw new \Exception("Invalid hotel ID");
            }
    
            // Find the hotel
            $hotel = Hotel::find($id);
            if (!$hotel) {
                throw new \Exception("Hotel not found");
            }
    
            // Delete Existing Another Hotel Details
            $hotel_details = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->whereNotNull('hotel_id')
            ->get();
            if ($hotel_details) {
                $hotel_details->each(function ($detail) {
                    $detail->delete();
                });
            }
            // Start database transaction
            DB::beginTransaction();
    
            // Update or create itinerary detail
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'header' => "day_$index", // Assuming you meant to use 'day_{index}'
                    'field' => 'day_hotel',
                ],
                [
                    'value' => $hotel->name, // Store the hotel ID
                    'hotel_id' => $hotel->id,
                ]
            );
    
            // Commit transaction

            DB::commit();
            $this->ReloadDayHotels($index);
            $this->errorHotel[$index] = '';
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
    
            // Store error message for Livewire validation
            $this->errorHotel[$index] = $e->getMessage();
        }
    }
    public function getRoute($index,$id){
        try {
            if (!$id) {
                throw new \Exception("Invalid hotel ID");
            }
    
            // Find the hotel
            $summary = RouteServiceSummary::find($id);
            if (!$summary) {
                throw new \Exception("Route Service not found");
            }
    
            // Start database transaction
            DB::beginTransaction();
    
            // Update or create itinerary detail
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'route_service_summary_id' => $summary->id,
                    'header' => "day_$index", // Assuming you meant to use 'day_{index}'
                    'field' => 'day_route',
                ],
                [
                    'value' => $summary->route?$summary->route->route_name:"N/A", // Store the hotel ID
                ]
            );
    
            // Commit transaction
            
            DB::commit();
          
            $this->errorRoute[$index] = '';
            $this->ReloadDayRoute($index);
            $this->active_new_route_modal = 0;
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
            // Store error message for Livewire validation
            $this->errorRoute[$index] = $e->getMessage();
        }
    }
    public function getActivityOrSightseeing($field, $index, $route_index, $route_service_summary_id, $value, $price, $ticket_price,$cab_id){
        try {
            // Start database transaction
            DB::beginTransaction();
            // Ensure price and ticket price are numeric
            if($field=='activity'){
                $totalPrice = round((float) $price + (float) $ticket_price);
            }
            if($field=='sightseeing'){
                $totalPrice = round((float) $ticket_price);
            }
            if($field=='cab'){
                $totalPrice = round((float) $price);
            }
           
            // Update or create itinerary detail
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'route_service_summary_id' => $route_service_summary_id,
                    'header' => "day_$index", // Using a dynamic day header
                    'field' => "day_$field",
                    'value' => $value,
                ],
                [
                    'value' => $value, // Store the activity name or ID
                    'price' => $totalPrice, // Store calculated price
                    'cab_id' => $cab_id?$cab_id:NULL,
                ]
            );
    
            // Commit transaction
            DB::commit();
    
            // Clear any previous error message for this index
            if($field=='activity'){
                if (isset($this->errorActivity[$index][$route_index])) {
                    $this->errorActivity[$index][$route_index] = '';
                }
            }
            if($field=='sightseeing'){
                if (isset($this->errorSightSeeing[$index][$route_index])) {
                    $this->errorSightSeeing[$index][$route_index] = '';
                }
            }
            if($field=='cab'){
                if (isset($this->errorCab[$index][$route_index])) {
                    $this->errorCab[$index][$route_index] = '';
                }
            }
        
            // Reload day route after update
            $this->ReloadDayRoute($index);
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
            // Store error message for Livewire validation
            // dd($e->getMessage());
            if($field=='activity'){
                $this->errorActivity[$index][$route_index] = $e->getMessage();
            }
            if($field=='sightseeing'){
                $this->errorSightSeeing[$index][$route_index] = $e->getMessage();
            }
            if($field=='cab'){
                $this->errorCab[$index][$route_index] = $e->getMessage();
            }
        }
    }
    public function GetRoomAddonPlan($field, $index, $hotel_id, $room_id, $value, $price){
        try {
            // Start database transaction
            DB::beginTransaction();
            // Update or create itinerary detail
            $field_data = "day_room_addon_plan_" . str_replace(' ', '_', strtolower($field));
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'hotel_id' => $hotel_id,
                    'room_id' => $room_id,
                    'header' => "day_$index", // Using a dynamic day header
                    'field' => $field_data, // Fixing field name
                    'value' => $value, // Store the activity name or ID
                ],
                [
                    'price' => $price?$price:0, // Store calculated price
                ]
            );
    
            // Commit transaction
            DB::commit();
    
            // Reload day route after update
            $this->ReloadDayHotels($index);
            $this->errorRoom[$index] = "";
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
            $this->errorRoom[$index] = $e->getMessage();
        }
    }
   
    public function OpenNewRouteModal($index){
        $this->active_new_route_modal = $index;
    }
    public function submitForm(){
        dd($this->all());
    }

    // Update Itinerary Data
    public function UpdateByKeyUp($header, $field, $value){
        ItineraryDetail::updateOrCreate(
            [
                'itinerary_id' => $this->itinerary_id,
                'header' => $header,
                'field' => $field,
            ],
            [
                'value' => $value,
            ]
        );
    }

    public function updateSelectedRoom($hotel_id, $index, $roomId)
    {
        // Store selected room details dynamically
        // dd($roomId);
        $this->selected_rooms[$index] = $roomId;
        try {
            // Start database transaction
            DB::beginTransaction();
            $room_data = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('hotel_id', $hotel_id)->where('header', 'day_' . $index)->whereNotNull('room_id')->get();
            if (count($room_data)>0) {
                $room_data->each(function ($detail) {
                    $detail->delete();
                });
            }
            $room = Room::find($roomId);
            // Update or create itinerary detail
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'header' => "day_$index", // Assuming you meant to use 'day_{index}'
                    'hotel_id' => $hotel_id,
                    'field' => 'day_room',
                ],
                [
                    'value' => $room->room_name, // Store the hotel ID
                    'room_id' => $roomId,
                ]
            );
            // Commit transaction
            
            DB::commit();


            $this->ReloadDayHotels($index);
            $this->errorRoom[$index] = '';
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
            // dd($e->getMessage());
            // Store error message for Livewire validation
            $this->errorRoom[$index] = $e->getMessage();
        }
    }

    public function FetchRoomPlan($index, $roomId){
        // Main Plan
        $MainSeasionPlan = SeasionPlan::where('type', 'main')
        ->where('title', 'Normal Season')
        ->get()
        ->toArray();

        if(count($MainSeasionPlan)>0){
            $main_plans = [];
            foreach ($MainSeasionPlan as $item) {
                $plan_types = explode(', ', $item['plan_item']); // Split plan types

                // Fetch all prices at once (avoiding N+1 queries)
                $prices = HotelPriceChart::where('room_id', $roomId)
                ->where('plan_title', $item['title'])
                ->whereIn('plan_item', $plan_types) // Get all matching plan_items
                ->pluck('item_price', 'plan_item') // Fetch as key-value pair (plan_item => item_price)
                ->toArray();

                // Build the response array
                $main_plans[] = [
                    'title' => $item['title'],
                    'plan_type' => array_map(function ($plan_type) use ($prices) {
                        return [
                        'name' => $plan_type,
                        'price' => $prices[$plan_type] ?? null // Assign price if found, else null
                        ];
                    }, $plan_types),
                ];
            }
        }

        // Addon Plan
        $AddonSeasionPlan = SeasionPlan::where('type', 'addon')->orderBy('position', 'ASC')
        ->get()
        ->toArray();

        if(count($AddonSeasionPlan)>0){
            $addon_plans = [];
            foreach ($AddonSeasionPlan as $item) {
                $plan_types = explode(', ', $item['plan_item']); // Split plan types

                // Fetch all prices at once (avoiding N+1 queries)
                $prices = HotelPriceChart::where('room_id', $roomId)
                ->where('plan_title', $item['title'])
                ->whereIn('plan_item', $plan_types) // Get all matching plan_items
                ->pluck('item_price', 'plan_item') // Fetch as key-value pair (plan_item => item_price)
                ->toArray();


                
                $field_data = "day_room_addon_plan_" . str_replace(' ', '_', strtolower($item['title']));

                $selected_addon_plan = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('header', 'day_' . $index)
                ->where('room_id', $roomId)
                ->where('field', $field_data)
                ->get()->toArray();

                // Build the response array
                $addon_plans[] = [
                'selected_addon_plan' => $selected_addon_plan,
                'title' => $item['title'],
                    'plan_type' => array_map(function ($plan_type) use ($prices) {
                        return [
                        'name' => $plan_type,
                        'price' => $prices[$plan_type] ?? null // Assign price if found, else null
                        ];
                    }, $plan_types),
                ];
            }
        }

        

        $this->hotel_room_price [$index]= [
            'room_details' =>Room::find($roomId),
            'main_seasion_plan' =>$main_plans,
            'addon_seasion_plan' =>$addon_plans,
        ];
    }

    public function updateSelectedRoomPlan($hotel_id, $roomId, $index, $plan_name, $price)
    {
        // Store selected room details dynamically
        $this->selected_room_plan[$index] = $plan_name;
        try {
            // Start database transaction
            DB::beginTransaction();
            // Update or create itinerary detail
            ItineraryDetail::updateOrCreate(
                [
                    'itinerary_id' => $this->itinerary_id,
                    'header' => "day_$index", // Assuming you meant to use 'day_{index}'
                    'hotel_id' => $hotel_id,
                    'room_id' => $roomId,
                    'field' => 'day_room_main_plan',
                ],
                [
                    'value' => $plan_name, // Store the hotel ID
                    'price' => $price?$price:0,
                ]
            );
            // Commit transaction
            
            DB::commit();
            
            $this->ReloadDayHotels($index);
            $this->errorRoom[$index] = '';
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            DB::rollBack();
            // dd($e->getMessage());
            // Store error message for Livewire validation
            $this->errorRoom[$index] = $e->getMessage();
        }
    }

    public function decreaseQuantity($index,$id){
        $ItineraryDetail = ItineraryDetail::find($id);
        if (!$ItineraryDetail) {
            return; // Exit if the item is not found
        }
        $updated_quantity = $ItineraryDetail->value_quantity - 1;
        
        if ($updated_quantity >= 1) {
            $piece_price = $ItineraryDetail->price / $ItineraryDetail->value_quantity;

            $ItineraryDetail->price = $piece_price * $updated_quantity;
            $ItineraryDetail->value_quantity = $updated_quantity;
            $ItineraryDetail->save();
        }
        $this->ReloadDayRoute($index);

        if(isset($ItineraryDetail->room_id)){
            $this->ReloadDayHotels($index);
        }
    }
    public function increaseQuantity($index,$id){
        $ItineraryDetail = ItineraryDetail::find($id);
      
        if (!$ItineraryDetail) {
            return; // Exit if the item is not found
        }
        $updated_quantity = $ItineraryDetail->value_quantity + 1; 
        if ($updated_quantity >= 1) {
            $piece_price = $ItineraryDetail->price / $ItineraryDetail->value_quantity;
            $ItineraryDetail->price = $piece_price * $updated_quantity;
            $ItineraryDetail->value_quantity = $updated_quantity;
            $ItineraryDetail->save();
        }
        $this->ReloadDayRoute($index);

        if(isset($ItineraryDetail->room_id)){
            $this->ReloadDayHotels($index);
        }
    }

    public function ResetItinerary(){
        $ItineraryDetail = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->get();
        if (count($ItineraryDetail)>0) {
            $ItineraryDetail->each(function ($detail) {
                $detail->delete();
            });
        }
        $itinerary_id = Crypt::encrypt($this->itinerary_id);
        return redirect()->route('admin.itinerary.preset.build', $itinerary_id);
    }
    public function render()
    {
        $this->total_amount = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->sum('price');
        $this->mainBanner = ItineraryBanner::where('destination_id', $this->destinationId)->get();
        return view('livewire.itinerary.create-preset-itinerary');
    }

   
}
