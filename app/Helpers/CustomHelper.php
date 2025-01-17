<?php

namespace App\Helpers;
use App\Models\HotelPriceChart;
use App\Models\HotelPriceChartType;
use App\Models\HotelSeasionTime;
use App\Models\Inventory;
use App\Models\DateWiseHotelPrice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomHelper
{
    public static function setHeadersAndTitle($parentHeader, $childHeader)
    {
        $pageTitle = 'Admin - ' . $parentHeader;
        
        return [
            'parentHeader' => $parentHeader,
            'childHeader' => $childHeader,
            'pageTitle' => $pageTitle,
        ];
    }
    public static function GenerateUniqueId($table, $prefix){
        // Get the current year
        $year = date('Y');

        // Get the latest unique ID from the specified table for the current year
        $latestUniqueId = \DB::table($table)
            ->where('unique_id', 'like', $prefix . $year . '%') // Filter by the prefix and current year
            ->orderBy('unique_id', 'desc') // Get the latest unique ID
            ->value('unique_id');

        // If there is no existing unique ID, start from 1
        if (!$latestUniqueId) {
            $nextId = 1;
        } else {
            // Extract the numeric part after the prefix and year and increment it
            $numericPart = intval(substr($latestUniqueId, strlen($prefix) + 4)); // 4 for 'YYYY'
            $nextId = $numericPart + 1; // Increment the numeric part
        }

        // Create the new unique ID with zero-padding
        $uniqueId = $prefix . $year . str_pad($nextId, 10, '0', STR_PAD_LEFT); // Adjust the padding as needed

        // Check if the generated ID already exists
        $exists = \DB::table($table)->where('unique_id', $uniqueId)->exists();

        // If the ID exists, we need to keep generating a new one (shouldn't happen with this logic)
        while ($exists) {
            $nextId++; // Increment to get a new numeric part
            $uniqueId = $prefix . $year . str_pad($nextId, 10, '0', STR_PAD_LEFT); // Generate a new unique ID
            $exists = \DB::table($table)->where('unique_id', $uniqueId)->exists(); // Check again
        }

        return $uniqueId;
    }
    
    public static function getLeadStatus($status)
    {
        $statuses = [
            1 => ['name' => 'Unattended', 'color' => 'bg-warning'],
            2 => ['name' => 'Follow-up', 'color' => 'bg-info'],
            3 => ['name' => 'Potential Lead', 'color' => 'bg-primary'],
            4 => ['name' => 'Confirmed Lead', 'color' => 'bg-success'],
            5 => ['name' => 'Package Executed', 'color' => 'bg-secondary'],
            6 => ['name' => 'Package Confirmed', 'color' => 'bg-success'],
            7 => ['name' => 'Cancelled', 'color' => 'bg-danger'],
            8 => ['name' => 'Hold', 'color' => 'bg-dark'],
            9 => ['name' => 'Close', 'color' => 'bg-success'],
        ];
    
        return $statuses[$status] ?? ['name' => 'Unknown Status', 'color' => 'bg-muted'];
    }


    public static function IncompleteHotelPriceChart($hotel_id, $room_id)
    {
        // Check if any incomplete data exists
        $dataCount = HotelPriceChart::where('hotel_id', $hotel_id)
            ->where('room_id', $room_id)
            ->whereNull('item_price')
            ->count();
    
        // Return false if any incomplete data exists or no data exists
        
        if ($dataCount > 0 || !HotelPriceChart::where('hotel_id', $hotel_id)->where('room_id', $room_id)->exists()) {
            return false;
        }
        // Return true if all data is complete
        return true;
    }
    public static function getHotelPriceChart($hotel_id, $room_id, $price_chart_type, $plan_title, $plan_item)
    {
        // Fetch the price chart type
        $type = HotelPriceChartType::where('hotel_id', $hotel_id)
            ->where('room_id', $room_id)
            ->where('title', $price_chart_type)
            ->first();

        if ($type) {
            // Fetch the item prices based on the filters
            $dataPrices = HotelPriceChart::where('hotel_id', $hotel_id)
                ->where('room_id', $room_id)
                ->where('price_chart_type_id', $type->id)
                ->where('plan_title', $plan_title)
                ->where('plan_item', $plan_item)
                ->first();
            // Check if prices exist
            if (isset($dataPrices)) {
                return intval($dataPrices->item_price); // Return the collection of prices
            }
            return null; // No prices found
           
        }
        return null; // Return null if the price chart type is not found
    }
    public static function get_hotel_seasion_time($hotel_id, $seasion_type_id){
        $data = [];
        $item = HotelSeasionTime::where('seasion_type_id', $seasion_type_id)->where('hotel_id', $hotel_id)->first();
        $data['start_date']= $item?$item->start_date:null;
        $data['end_date']= $item?$item->end_date:null;
        return $data;
    }
    public static function GetDateWiseHotelPrice($existing_price, $room_id, $item_title, $date){
         // Attempt to get the item_price from the database
        $item_price = DateWiseHotelPrice::where('room_id', $room_id)
        ->where('date', $date)
        ->where('item_title', $item_title)
        ->value('item_price');

        // Return the retrieved item_price or the existing price if null
        return intval($item_price ?? 0);
    }
    public static function GetDateWiseHotelInventory($hotel_id, $room_id, $date)
    {
        // Retrieve the inventory record from the database
        $inventory = Inventory::where('hotel_id', $hotel_id)
            ->where('room_id', $room_id)
            ->whereDate('date', $date)
            ->first(['total_unsold', 'block_request_type']);

        // Initialize default values if no record is found
        if (!$inventory) {
            return [
                'total_unsold' => 0,
                'block_request_type' => 0,
            ];
        }

        // Convert inventory object to an array
        $inventoryData = [
            'total_unsold' => $inventory->total_unsold,
            'block_request_type' => $inventory->block_request_type,
        ];

        // Adjust block_request_type while preserving total_unsold
        if ($inventory->block_request_type == 1) {
            $inventoryData['block_request_type'] = 1;
        } elseif ($inventory->block_request_type == 2) {
            $inventoryData['block_request_type'] = 2;
        } else {
            // Default case for block_request_type
            $inventoryData['block_request_type'] = 0;
        }
        return $inventoryData;
    }
    public static function GetDateWiseHotelAllInventory($hotel_id, $date)
    {
        // Retrieve the inventory record from the database
        $inventory = Inventory::where('hotel_id', $hotel_id)
            ->whereDate('date', $date)
            ->first(['total_unsold', 'block_request_type']);

        // Initialize default values if no record is found
        if (!$inventory) {
            return [
                'total_unsold' => 0,
                'block_request_type' => 0,
            ];
        }

        // Convert inventory object to an array
        $inventoryData = [
            'total_unsold' => $inventory->total_unsold,
            'block_request_type' => $inventory->block_request_type,
        ];

        // Adjust block_request_type while preserving total_unsold
        if ($inventory->block_request_type == 1) {
            $inventoryData['block_request_type'] = 1;
        } elseif ($inventory->block_request_type == 2) {
            $inventoryData['block_request_type'] = 2;
        } else {
            // Default case for block_request_type
            $inventoryData['block_request_type'] = 0;
        }
        return $inventoryData;
    }
    public static function GetHotelWiseMaxPrice($existing_price, $room_id, $item_title,$start_date,$end_date){
       
         // Attempt to get the item_price from the database
        $item_price = DateWiseHotelPrice::where('room_id', $room_id)
        ->where('item_title', $item_title)
        ->whereBetween('date', [$start_date, $end_date])
        ->max('item_price');
        // Return the retrieved item_price or the existing price if null
        return intval($item_price ?? $existing_price);
       
    }

    public static function uploadImage($image, $dynamicText=null, $divisionName=null, $folder){
        // Validate the uploaded file
        if (!$image->isValid()) {
            throw new \Exception('Invalid image file.');
        }

        // Format division name and dynamic text for filename
        $formattedDivisionName = Str::slug($divisionName); // Convert to URL-friendly string
        $formattedDynamicText = Str::slug($dynamicText);   // Convert to URL-friendly string

        // Generate a unique filename
        $timestamp = now()->format('YmdHis');            // Generate a 6-digit random number
        $extension = $image->getClientOriginalExtension(); // Get the original file extension

        // Construct the filename
        $uniqueFilename = "{$formattedDivisionName}-{$formattedDynamicText}-{$timestamp}.{$extension}";

        // Ensure the folder exists with proper permissions
        $folderPath = storage_path("app/public/{$folder}");
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0755, true); // Create the folder with 755 permissions
        }

        // Store the image in the specified folder
        $path = $image->storeAs($folder, $uniqueFilename, 'public');

        // Return the stored file path
        return 'storage/'.$path;
    }
}
