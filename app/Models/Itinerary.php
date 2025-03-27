<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Itinerary extends Model
{
    use HasFactory;
   protected $table = "itineraries";
   protected $fillable = [
        'type', 'destination_id', 'lead_Id', 'hotel_category', 'total_days', 'total_nights', 'itinerary_journey', 'night_journey', 'divisions_journey','itinerary_syntax','stay_by_journey'
   ];

    public function destination()
    {
        return $this->belongsTo(State::class, 'destination_id');
    }
    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_Id');
    }
    public function hotelCategory()
    {
        return $this->belongsTo(Category::class, 'hotel_category');
    }
}
