<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Repositories\HotelRepository;
use App\Repositories\LeadRepository;
use App\Helpers\CustomHelper;
// use App\Models\HotelImage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HotelManagementController extends Controller
{
    protected $leadRepository;
    protected $commonRepository;
    protected $hotelRepository;

    public function __construct(LeadRepository $leadRepository, CommonRepository $commonRepository, HotelRepository $hotelRepository)
    {
        $this->leadRepository = $leadRepository;
        $this->commonRepository = $commonRepository;
        $this->hotelRepository = $hotelRepository;
    }
    // Hotel Master
    // public function index(Request $request){
    //     // $update_id = $request->update_id ?? "";
    //     $data = [];
    //     // Get active destinations using a repository method
    //     $data['destinations'] = $this->commonRepository->getAllActiveState();
    //     $data['divisions'] = $this->commonRepository->getAllActiveCity();
    //     $data['hotel_categories'] = $this->commonRepository->getAllActiveCategory();

    //     // Fetch paginated hotel data from the hotel repository
    //     $get_data = $this->hotelRepository->getAllHotel(10);
    //     $data['hotels']= $get_data['hotel'];  // Paginated data
    //     $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Hotels');
    //     return view('admin.hotel.index', compact('data','common'));
    // }

    public function index(Request $request)
    {
        $data = [];
        
        // Fetch filter options
        $data['destinations'] = $this->commonRepository->getAllActiveState();
        $data['divisions'] = $this->commonRepository->getAllActiveCity();
        $data['hotel_categories'] = $this->commonRepository->getAllActiveCategory();
        $data['hotel_seasion_plan'] = $this->commonRepository->getAllActiveHotelSeasionPlan();
        // Prepare filters from request inputs
        $filters = [
            'destination' => $request->get('destination'),
            'division' => $request->get('division'),
            'hotel_category' => $request->get('hotel_categories'),
            'quick_search' => $request->get('quick_search'),
        ];

        // Fetch filtered and paginated hotel data
        $get_data = $this->hotelRepository->getAllHotel(10, $filters);
        $data['hotels'] = $get_data['hotels'];

        // Set headers and title
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Hotels');
        
        // Return view
        return view('admin.hotel.index', compact('data', 'common'));
    }

    public function create() {
        $destinations = $this->commonRepository->getAllActiveState();
        $seasion_types = $this->commonRepository->getAllActiveSeasionType();
        $divisions = $this->commonRepository->getAllActiveCity();
        $hotel_categories = $this->commonRepository->getAllActiveCategory();
        $hotel_ammenities = $this->commonRepository->getAllActiveAmmenity();
        $room_categories = $this->commonRepository->getAllActiveRoomCategory();
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'New Hotel');
        return view('admin.hotel.create',compact('destinations', 'divisions', 'hotel_categories','common','hotel_ammenities','room_categories','seasion_types'));
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hotels', 'name')
                    ->whereNull('deleted_at')
                    ->where('destination', $request->destination)
                    ->where('division', $request->division),
            ],
            'destination' => ['required', 'integer'], // Change from string to integer
            'division' => ['nullable', 'string', 'max:255'], // Division can be nullable
            'hotel_category' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'min:10', 'max:10', 'regex:/^\d{10}$/'], // Regex to ensure only numbers
            'whatsapp' => ['required', 'string', 'min:10', 'max:10', 'regex:/^\d{10}$/'], // Regex for valid number format
            'email' => ['required', 'email', 'max:255'],
            'secndary_email' => ['nullable', 'email', 'max:255'], // Secondary email is nullable

            // Seasion Type
            'seasion_start_date.*' => 'nullable|date|after_or_equal:today',
            'seasion_end_date.*' => 'nullable|date|after:seasion_start_date.*',
            
            // Validation for arrays with count consistency check
            'room' => ['required', 'array', 'min:1'],
            
            'no_of_room' => ['required', 'array', 'min:1'],
            'no_of_room.*' => ['required', 'integer', 'min:1'],
            
            'capacity' => ['required', 'array', 'min:1'],
            'capacity.*' => ['required', 'integer', 'min:1'],
            
            'no_of_bed' => ['required', 'array', 'min:1'],
            'no_of_bed.*' => ['required', 'integer', 'min:1'],
            
            'mattress' => ['required', 'array', 'min:1'],
            'mattress.*' => ['required', 'integer', 'min:1'],
            
            'room_type' => ['required', 'array', 'min:1'],
            'room_type.*' => ['required', 'string', 'min:1'], // Validate as string for room type
        ], [
            'name.required' => 'The hotel name is required.',
            'name.unique' => 'The name has already been taken for the selected destination and division.',
            'destination.required' => 'The destination is required.',
            'destination.integer' => 'The destination must be a valid ID.',
            'division.required' => 'The division is required.',
            'hotel_category.required' => 'The hotel category is required.',
            'mobile.min' => 'The mobile number must be at least 10 digits.',
            'mobile.max' => 'The mobile number must not be more than 10 digits.',
            'whatsapp.min' => 'The WhatsApp number must be at least 10 digits.',
            'whatsapp.max' => 'The WhatsApp number must not be more than 10 digits.',
            'email.email' => 'The email must be a valid email address.',
            'secndary_email.email' => 'The secondary email must be a valid email address.',

            'seasion_start_date.*.date' => 'Start date must be a valid date.',
            'seasion_start_date.*.after_or_equal' => 'Start date must be today or later.',
            'seasion_end_date.*.date' => 'End date must be a valid date.',
            'seasion_end_date.*.after' => 'End date must be after the start date.',

            'room.required' => 'Room is required.',
            'room.*.required' => 'Room is required.',
            'room.*.integer' => 'Room must be an integer.',
            'room.*.min' => 'Room must be at least 1.',
            'no_of_room.required' => 'NOR is required.',
            'no_of_room.*.required' => 'NOR is required.',
            'no_of_room.*.integer' => 'NOR must be an integer.',
            'no_of_room.*.min' => 'NOR must be at least 1.',
            'capacity.required' => 'Capacity is required.',
            'capacity.*.required' => 'Capacity is required.',
            'capacity.*.integer' => 'Capacity must be an integer.',
            'capacity.*.min' => 'Capacity must be at least 1.',
            'no_of_bed.required' => 'NOB is required.',
            'no_of_bed.*.required' => 'NOB is required.',
            'no_of_bed.*.integer' => 'NOB must be an integer.',
            'no_of_bed.*.min' => 'NOB must be at least 1.',
            'mattress.required' => 'Mattress is required.',
            'mattress.*.required' => 'Mattress is required.',
            'mattress.*.integer' => 'Mattress must be an integer.',
            'mattress.*.min' => 'Mattress must be at least 1.',
            'room_type.required' => 'Room type is required.',
            'room_type.*.required' => 'Room type is required.',
            'room_type.*.string' => 'Room type must be a valid string.',
        ]);
       
        try {
            $this->hotelRepository->storeHotel($request->all());
            return redirect()->route('admin.hotel.index')->with('success', 'Hotel created successfully.');
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function edit($id) {

        DB::beginTransaction();
        try {
            $hotel = $this->hotelRepository->getHotelById($id);
            $destinations = $this->commonRepository->getAllActiveState();
            $divisions = $this->commonRepository->getAllActiveCity();
            $hotel_categories = $this->commonRepository->getAllActiveCategory();
            $hotel_ammenities = $this->commonRepository->getAllActiveAmmenity();
            $room_categories = $this->commonRepository->getAllActiveRoomCategory();
            $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Edit Hotel');
            $hotelImages = $hotel->images;
            $seasion_types = $this->commonRepository->getAllActiveSeasionType();

            // Save the current url in the session
            session(['redirect_url' =>url()->current()]);

            return view('admin.hotel.edit', compact(
                'hotel', 
                'destinations', 
                'divisions', 
                'hotel_categories', 
                'hotel_ammenities', 
                'room_categories', 
                'common',
                'hotelImages',
                'seasion_types'
            ));
        } catch (\Exception $e) {
            \Log::error("Error editing hotel: " . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return back()->withError('Failed to load the edit page. Please try again.');
        }
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hotels', 'name')
                    ->whereNull('deleted_at')
                    ->where('destination', $request->destination)
                    ->where('division', $request->division)
                    ->ignore($id), // Ignore the current hotel
            ],
            'destination' => ['required', 'integer'],
            'division' => ['nullable', 'string', 'max:255'],
            'hotel_category' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'regex:/^\d{10}$/', 'size:10'],
            'whatsapp' => ['required', 'string', 'regex:/^\d{10}$/', 'size:10'],
            'email' => ['required', 'email', 'max:255'],
            'secndary_email' => ['nullable', 'email', 'max:255'],
            'room' => ['required', 'array', 'min:1'],
            'no_of_room' => ['required', 'array', 'min:1'],
            'no_of_room.*' => ['required', 'integer', 'min:1'],
            'capacity' => ['required', 'array', 'min:1'],
            'capacity.*' => ['required', 'integer', 'min:1'],
            'no_of_bed' => ['required', 'array', 'min:1'],
            'no_of_bed.*' => ['required', 'integer', 'min:1'],
            'mattress' => ['required', 'array', 'min:1'],
            'mattress.*' => ['required', 'integer', 'min:1'],
            'room_type' => ['required', 'array', 'min:1'],
            'room_type.*' => ['required', 'string', 'max:255'], // Added `max:255` for consistency
            // Seasion Type
            'seasion_start_date.*' => 'nullable|date|after_or_equal:today',
            'seasion_end_date.*' => 'nullable|date|after:seasion_start_date.*',
        ],[
            'seasion_start_date.*.date' => 'Start date must be a valid date.',
            'seasion_start_date.*.after_or_equal' => 'Start date must be today or later.',
            'seasion_end_date.*.date' => 'End date must be a valid date.',
            'seasion_end_date.*.after' => 'End date must be after the start date.',
        ]);
        try {
            $this->hotelRepository->updateHotel($id, $request->all());

          // Redirect to the stored URL or fallback route with a success message
        return redirect()->to(session('redirect_url', route('admin.hotel.index')))
        ->with('success', 'Hotel updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteImage($imageId)
    {
        try {
            // Find the image by ID
            $image = HotelImage::findOrFail($imageId);

            // Delete the image file from storage
            Storage::disk('public')->delete($image->image_path);

            // Delete the record from the database
            $image->delete();

            return response()->json(['status' => 'success', 'message' => 'Image deleted successfully']);
        } catch (\Exception $e) {
            \Log::error("Error deleting image: " . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return response()->json(['status' => 'error', 'message' => 'Failed to delete the image.'], 500);
        }}
        

    

    

    // Hotel Seasion Plan
    public function showHotelImages($hotelId)
    {
        try {
            $hotelImages = HotelImage::where('hotel_id', $hotelId)->get();

            if ($hotelImages->isEmpty()) {
                return response()->json(['images' => []]);
            }

            return response()->json(['images' => $hotelImages]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function hotel_seasion_plan(Request $request){
        $update_id = $request->update_id ?? "";
        $update_item = $this->commonRepository->getHotelSeasionPlanById($update_id);
        $data = $this->commonRepository->getAllHotelSeasionPlan();
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Seasion Plans');
        return view('admin.seasion_plan.index', array_merge(compact('data','update_item'), $common));
    }
    public function hotel_seasion_plan_store(Request $request){
        $validatedData = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('seasion_plans', 'title')->whereNull('deleted_at'),
            ],
            'plan_item' => 'required|array|min:1',
            'plan_item.*' => 'required|string|max:255',
        ], [
            'title.required' => 'The title field is required.',
            'plan_item.required' => 'At least one plan item is required.',
            'plan_item.*.required' => 'This field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->storeHotelSeasionPlan($validatedData);
            return redirect()->back()->with('success', 'Seasion created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function hotel_seasion_plan_update(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('seasion_plans', 'title')->ignore($request->id)->whereNull('deleted_at'),
            ],
            'plan_item' => 'required|array|min:1',
            'plan_item.*' => 'required|string|max:255',
        ], [
            'title.required' => 'The title field is required.',
            'plan_item.required' => 'At least one plan item is required.',
            'plan_item.*.required' => 'This field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->updateHotelSeasionPlan($request->all());
            return redirect()->back()->with('success', 'Seasion updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function hotel_seasion_plan_destroy($id){
        try {
            $this->commonRepository->deleteSeasionPlan($id);
            return redirect()->back()->with('success', 'Seasion deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($id){
        try {
            $this->hotelRepository->deleteHotel($id);
            return redirect()->route('admin.hotel.index')->with('success', 'Hotel deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function room_price_store(Request $request){
        try {
            $this->hotelRepository->RoomWisePriceStore($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the data.',
                'error' => $e->getMessage() 
            ], 500);
        }
    }



    public function updateOrder(Request $request)
    {
        $order = $request->order;

        if ($this->commonRepository->updateOrder($order)) {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 500);
    }
}
