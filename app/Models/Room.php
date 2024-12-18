<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'room_type',
        'room_category',
        'room_name',
        'no_of_rooms',
        'capacity',
        'no_of_beds',
        'mattress',
        'ammenities',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}

