<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CustomHelper;
use App\Models\Cab;
use App\Repositories\CommonRepository;

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

}
