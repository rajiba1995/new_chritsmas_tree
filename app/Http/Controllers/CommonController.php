<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Helpers\CustomHelper;
use Illuminate\Validation\Rule;

class CommonController extends Controller
{
    protected $commonRepository;

    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
    }
    // State Master
    public function state_index(Request $request){
        $update_id = $request->update_id ?? "";
        $update_item = $this->commonRepository->getStateById($update_id);
        $state = $request->destination??"";
        $get_destinations = $this->commonRepository->getAllState(10,$state);
        $states = $get_destinations['states'];  // Paginated data
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Destinations(States)');
        return view('admin.state.index', array_merge(compact('states','update_item'), $common));
    }

    public function state_store(Request $request){
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('states', 'name')->whereNull('deleted_at'), // Ignore soft-deleted records
            ],
        ], [
            'name.required' => 'Please enter destination name.',
            'name.unique' => 'This destination name already exists.',
        ]);
        try {
            $this->commonRepository->createState($validatedData);
            return redirect()->back()->with('success', 'Destination created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function state_update(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('states', 'name')->ignore($request->id)->whereNull('deleted_at'),
            ],
          
        ], [
            'name.required' => 'The name field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->updateState($request->all());
            return redirect()->back()->with('success', 'Destination updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function state_destroy($id){
        try {
            $this->commonRepository->deleteState($id);
            return redirect()->route('admin.state.index')->with('success', 'Destination deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // Division Master
    // public function division_index(Request $request){
    //     $update_id = $request->update_id ?? "";
    //     $update_item = $this->commonRepository->getCityById($update_id);
    //     $dev = $request->division??"";
    //     $des = $request->destination??"";
    //     $divisions = $this->commonRepository->getAllCity(10, $dev, $des);
    //     $get_destinations = $this->commonRepository->getAllActiveState();
    //     // Access the paginated data and total records count
    //     $destinations = $get_destinations['totalRecords'];
    //     $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Division(City)');
    //     return view('admin.division.index', array_merge(compact('divisions','destinations','update_item'), $common));
    // }
    public function division_index(Request $request)
    {
        $update_id = $request->update_id ?? "";
        $update_item = $this->commonRepository->getCityById($update_id);

        $dev = $request->division ?? "";
        $des = $request->destination ?? "";

        $divisions = $this->commonRepository->getAllCity(10, $dev, $des);

        // Directly assign the collection
        $destinations = $this->commonRepository->getAllActiveState();

        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Division(City)');

        return view('admin.division.index', array_merge(compact('divisions', 'destinations', 'update_item'), $common));
    }


    public function division_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:cities,name',
            'state_id' => 'required',
        ], [
            'name.required' => 'Please enter division name.',
            'state_id.required' => 'Please enter destination name.',
            'name.unique' => 'This division name already exists.',
        ]);
        try {
            $this->commonRepository->createCity($validatedData);
            return redirect()->back()->with('success', 'Division created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function division_update(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('cities', 'name')->ignore($request->id)->whereNull('deleted_at'),
            ],
          'state_id' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.unique' => 'This division name already exists.',
            'state_id.required' => 'Please enter destination name.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->updateCity($request->all());
            return redirect()->back()->with('success', 'Division updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function division_destroy($id){
        try {
            $this->commonRepository->deleteCity($id);
            return redirect()->route('admin.division.index')->with('success', 'Division deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

     // Category Master
     public function category_index(Request $request){
       
        $categories = $this->commonRepository->getAllCategory(10);
        $update_id = $request->update_id ?? "";
        $update_item = $this->commonRepository->getHotelCategoryById($update_id);
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Category');
        return view('admin.category.index', array_merge(compact('categories','update_item'), $common));
    }

    public function category_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.required' => 'Please enter category name.',
            'name.unique' => 'This category name already exists.',
        ]);
        try {
            $this->commonRepository->createCategory($validatedData);
            return redirect()->back()->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function category_update(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'name')->ignore($request->id)->whereNull('deleted_at'),
            ],
          
        ], [
            'name.required' => 'The name field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->updateCategory($request->all());
            return redirect()->back()->with('success', 'Categgory updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function category_destroy($id){
        try {
            $this->commonRepository->deleteCategory($id);
            return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

        // Ammenity Master
        public function ammenity_index(Request $request){
            $update_id = $request->update_id ?? "";
            $update_item = $this->commonRepository->getAmmenityById($update_id);
            $ammenities = $this->commonRepository->getAllAmmenity(10);
            $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Ammenity');
            return view('admin.ammenity.index', array_merge(compact('ammenities','update_item'), $common));
        }

        public function ammenity_store(Request $request){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:ammenities,name',
            ], [
                'name.required' => 'Please enter ammenity name.',
                'name.unique' => 'This ammenity name already exists.',
            ]);
            try {
                $this->commonRepository->createAmmenity($validatedData);
                return redirect()->back()->with('success', 'Ammenity created successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }

        public function ammenity_update(Request $request){
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('ammenities', 'name')->ignore($request->id)->whereNull('deleted_at'),
                ],
              
            ], [
                'name.required' => 'The name field is required.',
            ]);
              // After validation, proceed to save the data
            try {
                $this->commonRepository->updateAmmenity($request->all());
                return redirect()->back()->with('success', 'Categgory updated successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    
    
        public function ammenity_destroy($id){
            try {
                $this->commonRepository->deleteAmmenity($id);
                return redirect()->route('admin.ammenity.index')->with('success', 'Ammenity deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }

         // Room Category Master
         public function room_category_index(Request $request){
            $update_id = $request->update_id ?? "";
            $update_item = $this->commonRepository->getRoomCategoryById($update_id);
            $roomCategories = $this->commonRepository->getAllRoomCategory(10);
            $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Room Category');
            return view('admin.room_category.index', array_merge(compact('roomCategories','update_item'), $common));
        }

        public function room_category_store(Request $request){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:room_categories,name',
            ], [
                'name.required' => 'Please enter room category name.',
                'name.unique' => 'This room category name already exists.',
            ]);
            try {
                $this->commonRepository->createRoomCategory($validatedData);
                return redirect()->back()->with('success', 'Room Category created successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }

        public function room_category_update(Request $request){
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('room_categories', 'name')->ignore($request->id)->whereNull('deleted_at'),
                ],
              
            ], [
                'name.required' => 'The name field is required.',
            ]);
              // After validation, proceed to save the data
            try {
                $this->commonRepository->updateRoomCategory($request->all());
                return redirect()->back()->with('success', 'Categgory updated successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    
    
        public function room_category_destroy($id){
            try {
                $this->commonRepository->deleteRoomCategory($id);
                return redirect()->route('admin.room.category.index')->with('success', 'Room Category deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    
}