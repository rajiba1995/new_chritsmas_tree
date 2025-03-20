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
        'header',
        'field',
        'value',
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
    public function route_service(){
        return $this->belongsTo(RouteServiceSummary::class, 'route_service_summary_id', 'id');
    }
}
