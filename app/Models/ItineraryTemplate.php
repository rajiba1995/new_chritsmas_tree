<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItineraryTemplate extends Model
{
   use HasFactory;
   protected $table = "itinerary_templates";
   
   protected $fillable = [
        'destination_id', 'created_at', 'updated_at'
   ];


    public function destination()
    {
        return $this->belongsTo(State::class, 'destination_id');
    }
}
