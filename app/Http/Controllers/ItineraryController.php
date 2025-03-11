<?php

namespace App\Http\Controllers;
use App\Models\ItineraryBanner;
use App\Models\Itinerary;
use App\Models\Category;
use App\Helpers\CustomHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function DestinationWisePresetItineraryBuilder($encryptedId){
        try {
            $id = Crypt::decrypt($encryptedId);
            $itineraryExists = Itinerary::find($id);
    
            if (!$itineraryExists) {
                abort(404, 'Itinerary not found.');
            }
    
            $common = CustomHelper::setHeadersAndTitle('Itinerary Management', 'Preset Itinerary Build');
            return view('admin.itinerary.destination-wise-preset-itinerary-builder', compact('common','itineraryExists', 'id'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(403, 'Invalid request.');
        }
       
    }
}
