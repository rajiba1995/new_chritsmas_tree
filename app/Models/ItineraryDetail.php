<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItineraryDetail extends Model
{
   use HasFactory;
   protected $fillable = [
        'itinerary_id',
        'hotel_id',
        'room_id',
        'header',
        'field',
        'value',
    ];
     // Relationship with Itinerary model
     public function itinerary()
     {
         return $this->belongsTo(Itinerary::class);
     }

     public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
}
