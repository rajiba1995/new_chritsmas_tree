<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelSeasionTime extends Model
{
    protected $fillable = [
        'seasion_type', 
        'start_date', 
        'end_date', 
        'seasion_type_id', 
        'hotel_id'
    ];
}
