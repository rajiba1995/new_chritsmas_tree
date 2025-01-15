<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\HotelImage;
use App\Models\HotelPriceChartType;
use App\Models\HotelPriceChart;
use Illuminate\Support\Facades\DB;

class InventoryRepository
{
    // public function getAllInventory($limit = 10, $filters = [])
    // {
    //     $query = Inventory::orderBy('name', 'ASC');

    //     if (!empty($filters['destination'])) {
    //         $query->where('destination', $filters['destination']);
    //     }

    //     if (!empty($filters['division'])) {
    //         $query->where('division', $filters['division']);
    //     }

    //     if (!empty($filters['hotel_category'])) {
    //         $query->where('hotel_category', $filters['hotel_category']);
    //     }
    
    //     if (!empty($filters['quick_search'])) {
    //         $quickSearch = $filters['quick_search'];
    //         $query->where(function ($q) use ($quickSearch) {
    //             $q->where('name', 'like', "%$quickSearch%")
    //                 // ->orWhere('phone_code', 'like', "%$quickSearch%")
    //                 ->orWhere('price', 'like', "%$quickSearch%")
    //                 ->orWhere('name', 'like', "%$quickSearch%")
    //                 ->orWhere('quantity', 'like', "%$quickSearch%");
    //         });
    //     }


    //     // Paginate results
    //     $paginatedInventories = $query->paginate($limit);

    //     // Return paginated hotels
    //     return [
    //         'inventories' => $paginatedInventories,
    //     ];
    // }


}