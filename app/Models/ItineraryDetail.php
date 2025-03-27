<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItineraryDetail extends Model
{
   use HasFactory;
   protected $fillable = [
        'itinerary_id',
        'route_service_summary_id',
        'hotel_id',
        'room_id',
        'cab_id',
        'header',
        'field',
        'value',
        'value_quantity',
        'price',
    ];
     // Relationship with Itinerary model
     public function itinerary()
     {
         return $this->belongsTo(Itinerary::class);
     }

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
    public function room(){
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function cab(){
        return $this->belongsTo(Cab::class, 'cab_id', 'id');
    }
    public function route_service(){
        return $this->belongsTo(RouteServiceSummary::class, 'route_service_summary_id', 'id');
    }
}
