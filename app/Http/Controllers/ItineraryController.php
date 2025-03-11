<?php

namespace App\Http\Controllers;
use App\Models\ItineraryBanner;
use App\Models\State;
use App\Models\Category;
use App\Helpers\CustomHelper;

use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    public function banners(){
        $common = CustomHelper::setHeadersAndTitle('Itinerary Management', 'Division Wise Banners');
        return view('admin.itinerary.division-wise-banners', compact('common'));
    }
    public function DestinationWisePresetItineraryList(){
        $common = CustomHelper::setHeadersAndTitle('Itinerary Management', 'Preset Itinerary');
        return view('admin.itinerary.destination-wise-preset-itinerary-list', compact('common'));
    }

    public function DestinationWisePresetItineraryBuilder($destination_id,$category_id){
        $destinationExists = State::find($destination_id);
        $categoryExists = Category::where('id', $category_id)->first();
        // 
        if (!$destinationExists || !$categoryExists) {
            abort(404); // Return a 404 page if not found
        }
        $common = CustomHelper::setHeadersAndTitle('Itinerary Management', 'Destination Wise Preset Itinerary Builder');
        return view('admin.itinerary.destination-wise-preset-itinerary-builder', compact('common','destination_id','category_id'));
    }
}
