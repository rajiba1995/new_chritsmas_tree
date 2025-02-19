<?php

namespace App\Http\Controllers;
use App\Models\ItineraryBanner;
use App\Helpers\CustomHelper;

use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    public function banners(){
        $common = CustomHelper::setHeadersAndTitle('Itinerary Management', 'Division Wise Banners');
        return view('admin.itinerary.division-wise-banners', compact('common'));
    }
}
