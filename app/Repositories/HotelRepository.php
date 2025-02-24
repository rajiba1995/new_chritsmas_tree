<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\HotelImage;
use App\Models\HotelPriceChartType;
use App\Models\HotelSeasionTime;
use App\Models\HotelPriceChart;
use Illuminate\Support\Facades\DB;

class HotelRepository
{
    // Hotel
    // public function getAllHotel($limit = 10)
    // {
    //     $query = Hotel::orderBy('name', 'ASC');  // Start by ordering the cities
    //     // // dd($division);
    //     // // Apply division filter if provided
    //     // if (!empty($division)) {
    //     //     $query->where('name', 'like', "%{$division}%");
    //     // }

    //     // // Apply destination filter if provided
    //     // if (!empty($destination)) {
    //     //     $query->where('state', $destination);
    //     // }

    //     // Paginate the results
    //     $paginatedStates = $query->paginate($limit);  // $limit is the number of results per page

    //     // Get the total number of records (excluding pagination)
    //     $totalRecords = Hotel::orderBy('name', 'ASC')->get(); 

    //     // Return both the paginated results and the total record count
    //     return [
    //         'hotel' => $paginatedStates,
    //         'totalRecords' => $totalRecords,
    //     ];
    // }

    public function getAllHotel($limit = 10, $filters = [])
    {
        $query = Hotel::orderBy('name', 'ASC');

        if (!empty($filters['destination'])) {
            $query->where('destination', $filters['destination']);
        }

        if (!empty($filters['division'])) {
            $query->where('division', $filters['division']);
        }

        if (!empty($filters['hotel_category'])) {
            $query->where('hotel_category', $filters['hotel_category']);
        }
    
        if (!empty($filters['quick_search'])) {
            $quickSearch = $filters['quick_search'];
            $query->where(function ($q) use ($quickSearch) {
                $q->where('name', 'like', "%$quickSearch%")
                    // ->orWhere('phone_code', 'like', "%$quickSearch%")
                    ->orWhere('mobile_number', 'like', "%$quickSearch%")
                    ->orWhere('number_of_rooms', 'like', "%$quickSearch%")
                    ->orWhere('whatsapp_number', 'like', "%$quickSearch%")
                    ->orWhere('email1', 'like', "%$quickSearch%")
                    ->orWhere('email2', 'like', "%$quickSearch%");
            });
        }


        // Paginate results
        $paginatedHotels = $query->paginate($limit);

        // Return paginated hotels
        return [
            'hotels' => $paginatedHotels,
        ];
    }


    // Hotel Master
    public function storeHotel(array $data)
    {
        DB::beginTransaction(); // Start the transaction
        try {
            $hotel = new Hotel;
            $hotel->name = ucwords($data['name']);
            $hotel->destination = $data['destination'];
            $hotel->division = $data['division'];
            $hotel->hotel_category = $data['hotel_category'];
            $hotel->phone_code = $data['mobile-country'];
            $hotel->mobile_number = $data['mobile'];
            $hotel->whatsapp_number = $data['whatsapp'];
            $hotel->email1 = $data['email'];
            $hotel->email2 = $data['secndary_email'];
            $hotel->address = $data['address'];
    
            if (isset($data['no_of_room']) && is_array($data['no_of_room'])) {
                $hotel->number_of_rooms = array_sum($data['no_of_room']);
            } else {
                $hotel->number_of_rooms = 0; 
            }
    
            $hotel->save();

            // Hotel Seasion Time
            // foreach($data['seasion_type'] as $type_key=>$type){
            //     if(!empty($data['seasion_start_date'][$type_key]) && !empty($data['seasion_end_date'][$type_key])){
            //         $seasion_time = new HotelSeasionTime;
            //         $seasion_time->seasion_type_id = $type;
            //         $seasion_time->hotel_id =$hotel->id;
            //         $seasion_time->seasion_type = $data['seasion_type_title'][$type_key];
            //         $seasion_time->start_date = $data['seasion_start_date'][$type_key];
            //         $seasion_time->end_date = $data['seasion_end_date'][$type_key];
            //         $seasion_time->save();
            //     }
            // }

            // Create New hotel Rooms
          
            if (isset($data['room']) && is_array($data['room'])) {
                foreach ($data['room'] as $key => $roomData) {
                    $room = new Room;
                    $room->room_category = $roomData;
                    $room->room_type = $data['room_type'][$key];
                    $room->room_name = ucfirst($data['room'][$key]) . ' - ' . ucfirst($data['room_type'][$key]);
                    $room->hotel_id = $hotel->id; // Associate with the newly created hotel
                    $room->no_of_rooms = $data['no_of_room'][$key];
                    $room->capacity = $data['capacity'][$key];
                    $room->no_of_beds = $data['no_of_bed'][$key];
                    $room->mattress = $data['mattress'][$key];
                    if (isset($data['ammenity'][$key]) && is_array($data['ammenity'][$key])) {
                        $room->ammenities = implode(',', $data['ammenity'][$key]);
                    }
                    $room->save();
                }
            }

            $imageData = [];

            // Check if 'images' is present and is an array
            if (isset($data['images']) && is_array($data['images'])) {
                foreach ($data['images'] as $image) {
                    // Generate a unique filename
                    $timestamp = now()->format('YmdHis'); // Format: YYYYMMDDHHMMSS
                    $randomNumber = rand(100000, 999999); // Generate a 6-digit random number
                    $extension = $image->getClientOriginalExtension(); // Get the original file extension
                    $uniqueFilename = "{$timestamp}_{$randomNumber}.{$extension}";
            
                    // Store the image with the unique filename
                    $path = $image->storeAs('hotel_images', $uniqueFilename, 'public');
            
                    // Add to the batch insert array
                    $imageData[] = [
                        'hotel_id' => $hotel->id,
                        'image_path' => $path,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            
                // Batch insert into the database
                if (!empty($imageData)) {
                    HotelImage::insert($imageData);
                }
            }
            
            DB::commit(); 
            return $hotel;
    
        } catch (\Exception $e) {
            DB::rollBack(); 
            // Log the exception for debugging
            \Log::error("Error storing hotel: " . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            throw $e; // Re-throw the exception to handle it in the calling code
        }
    }

    // public function updateHotel(Request $request,$id, array $data)
    public function updateHotel($id, array $data)
    {
        DB::beginTransaction(); // Start the transaction
        try {
            // Find the hotel by ID
            $hotel = Hotel::findOrFail($id);
    
            // Update hotel fields
            $hotel->name = ucwords($data['name']);
            $hotel->destination = $data['destination'];
            $hotel->division = $data['division'];
            $hotel->hotel_category = $data['hotel_category'];
            $hotel->phone_code = $data['mobile-country'];
            $hotel->mobile_number = $data['mobile'];
            $hotel->whatsapp_number = $data['whatsapp'];
            $hotel->email1 = $data['email'];
            $hotel->email2 = $data['secndary_email'];
            $hotel->address = $data['address'];
    
            if (isset($data['no_of_room']) && is_array($data['no_of_room'])) {
                $hotel->number_of_rooms = array_sum($data['no_of_room']);
            } else {
                $hotel->number_of_rooms = 0; 
            }
    
            $hotel->save();

             // Hotel Seasion Time
         
            //  foreach($data['seasion_type'] as $type_key=>$type){
            
            //     if(!empty($data['seasion_start_date'][$type_key]) && !empty($data['seasion_end_date'][$type_key])){
            //         HotelSeasionTime::updateOrCreate( [
            //                 'seasion_type_id' => $type,
            //                 'hotel_id' => $hotel->id,
            //             ],
            //             [
            //                 'start_date' => $data['seasion_start_date'][$type_key],
            //                 'end_date' => $data['seasion_end_date'][$type_key],
            //                 'seasion_type' => $data['seasion_type_title'][$type_key],
            //             ] );
            //     }
            // }

            // Update room data
            $existingRoomIds = $hotel->rooms->pluck('id')->toArray();
    
            foreach ($data['room'] as $key => $roomData) {
                $room = Room::updateOrCreate(
                    ['id' => $existingRoomIds[$key] ?? null], // Use existing room ID if available
                    [
                        'room_category' => $roomData,
                        'room_type' => $data['room_type'][$key],
                        'room_name' => ucfirst($data['room'][$key]) . ' - ' . ucfirst($data['room_type'][$key]),
                        'hotel_id' => $hotel->id,
                        'no_of_rooms' => $data['no_of_room'][$key],
                        'capacity' => $data['capacity'][$key],
                        'no_of_beds' => $data['no_of_bed'][$key],
                        'mattress' => $data['mattress'][$key],
                       'ammenities' => isset($data['ammenity'][$key + 1])
                        ? (is_array($data['ammenity'][$key + 1]) 
                            ? implode(',', $data['ammenity'][$key + 1]) 
                            : $data['ammenity'][$key + 1]) 
                        : '',
                        ]
                );
            }
            
            DB::commit(); // Commit the transaction
            return $hotel;
    
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction on error
            \Log::error("Error updating hotel: " . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            throw $e; // Re-throw the exception
        }
    }
    
    

    
    public function getHotelById($id)
    {
        return Hotel::with('rooms')->find($id);
    }

    public function deleteHotel($id){
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return $hotel;
    }
    public function RoomWisePriceStore(array $data)
    {
       
        foreach ($data['title'] as $key => $item) {
        // Create or update the price chart type
            $price_chart_type = HotelPriceChartType::updateOrCreate(
                [
                    'hotel_id' => $data['hotel_id'],
                    'room_id' => $data['room_id'],
                    'title' => $item,
                ],
                [
                    'rack_rate' => $data['rack_rate'][$key] ?? 0,
                    'gst' => $data['gst'][$key] ?? 0,
                    'type' => $data['chart_type'][$key],
                ]
            );
            // Process each plan_title and its corresponding plan_item
            foreach ($data['plan_title'][$key] as $plan_index => $plan_title) {
                $plan_items = $data['plan_item'][$key]; // Array of plan items
                $item_prices = $data['item_price'][$key]; // Corresponding prices
            
                foreach ($plan_items as $group_key => $plan_item_group) { // $plan_item_group is each inner array
                    // Check if item prices for the group key exist
                    if (!isset($item_prices[$group_key]) || !is_array($item_prices[$group_key])) {
                        return response()->json([
                            'success' => false,
                            'message' => "Item prices for group key '{$group_key}' are missing or invalid.",
                            'error' => 'Invalid data structure'
                        ], 400);
                    }
            
                    // Loop through the item prices using valid indices
                    // dd($item_prices[$group_key]);
                    foreach ($item_prices[$group_key] as $index => $price) {
                        foreach ($plan_item_group as $item_key => $plan_item) {
                            // Insert or update data
                            // dd($item_prices[$group_key][$item_key], $plan_item_group);
                            $insert = HotelPriceChart::updateOrCreate(
                                [
                                    'hotel_id' => $data['hotel_id'],
                                    'room_id' => $data['room_id'],
                                    'price_chart_type_id' => $price_chart_type->id,
                                    'plan_title' => $group_key,
                                    'plan_item' => $plan_item,
                                ],
                                [
                                    'item_price' => $item_prices[$group_key][$item_key],
                                ]
                            );
                        }
                    }
                }
            }
            
            
        }
        return true;
    }



}
