<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateWiseHotelPrice extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hotel_id',
        'room_id',
        'date',
        'item_title',
        'item_price',
    ];

    /**
     * Get the hotel associated with this price.
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    /**
     * Get the room associated with this price.
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
