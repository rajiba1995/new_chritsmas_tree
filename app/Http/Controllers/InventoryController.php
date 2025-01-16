<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Repositories\HotelRepository;
use App\Repositories\LeadRepository;
use App\Repositories\InventoryRepository;
use App\Helpers\CustomHelper;
// use App\Models\HotelImage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    protected $commonRepository;
    protected $hotelRepository;
    protected $inventoryRepository;
    
    public function __construct(CommonRepository $commonRepository, HotelRepository $hotelRepository,InventoryRepository $inventoryRepository)
    {
        $this->commonRepository = $commonRepository;
        $this->hotelRepository = $hotelRepository;
        $this->inventoryRepository = $inventoryRepository;
    }

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
            'divisions' => $request->get('division'),
            'hotel_category' => $request->get('hotel_categories'),
            'quick_search' => $request->get('quick_search'),
        ];


        // Set headers and title
        $common = CustomHelper::setHeadersAndTitle('Inventory Management', 'Inventories');
        // dd($pageTitle);
        // Return view
        return view('admin.inventory.index', compact('data', 'common'));
    }
    public function getDivisions($destinationId)
    {
        $divisions = City::where('state_id', $destinationId)->pluck('name', 'id'); // Adjust relationship if needed
        return response()->json($divisions);
    }
    public function page1(){
        $common = CustomHelper::setHeadersAndTitle('Inventory Management', 'page1');
        return view('admin.inventory.page1',compact('common'));
    }
    public function page2(){
        $common = CustomHelper::setHeadersAndTitle('Inventory Management', 'page2');
        return view('admin.inventory.page2',compact('common'));
    }


}
