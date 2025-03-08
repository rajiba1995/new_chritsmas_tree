<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CustomHelper;
use App\Models\Cab;
use App\Models\DivisionWiseActivity;
use App\Models\ServiceWiseCab;
use App\Repositories\CommonRepository;
use Illuminate\Support\Facades\DB;

class RouteManagementController extends Controller
{
    protected $commonRepository;
    
    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
    }
    public function DivisionWiseCabList(Request $request)
    {
        $common = CustomHelper::setHeadersAndTitle('Route Management', 'Division Wise Cab List');
        return view('admin.route.division-wise-cab-list', compact('common'));
    }
    public function DivisionWiseActivityList(Request $request)
    {
        $common = CustomHelper::setHeadersAndTitle('Route Management', 'Division Wise Activity');
        return view('admin.route.division-wise-activity-list', compact('common'));
    }

    public function DivisionWiseActivityUpdateContent(Request $request){
        $update = DivisionWiseActivity::find($request->activity_id);
        if (!$update) {
            return response()->json(['success' => false, 'message' => 'Activity not found!'], 404);
        }
        $update->description = $request->description;
        $update->save();
        return response()->json(['success' => true, 'message' => 'Content updated successfully!']);
    }

    public function DivisionWiseSightseeingList(Request $request){
        $common = CustomHelper::setHeadersAndTitle('Route Management', 'Division Wise SIghtseeing');
        return view('admin.route.division-wise-sightseeing-list', compact('common'));
    }

    public function DestinationWiseRouteList(Request $request){
        $common = CustomHelper::setHeadersAndTitle('Route Management', 'Destination Wise Route');
        return view('admin.route.destination-wise-route-list', compact('common'));
    }
    public function AllServices(Request $request){
        $common = CustomHelper::setHeadersAndTitle('Route Management', 'All Route & Services');
        return view('admin.route.routes-and-services-list', compact('common'));
    }

    public function UpdateCabServicePrice(Request $request){
        $id = $request->input('id');
        $price = $request->input('price');

        // Validate price
        if (!is_numeric($price) || empty($id)) {
            return response()->json(["success" => false, "message" => "Invalid input"]);
        }
        // Update database (replace 'cabs' with your actual table name)
        ServiceWiseCab::where('id', $id)->update(['cab_price' => $price]);

        return response()->json(["success" => true, "message" => "Price updated successfully"]);
    }

}
