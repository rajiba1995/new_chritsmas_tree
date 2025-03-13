<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItineraryDetail extends Model
{
   use HasFactory;
   protected $fillable = [
        'itinerary_id',
        'header',
        'field',
        'value',
    ];
     // Relationship with Itinerary model
     public function itinerary()
     {
         return $this->belongsTo(Itinerary::class);
     }
}
