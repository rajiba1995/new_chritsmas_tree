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
}
