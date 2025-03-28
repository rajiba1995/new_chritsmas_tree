<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPriceChartType extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'room_id',
        'title',
        'rack_rate',
        'gst',
        'type',
    ];

    // Define relationships if necessary
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function seasonNames ()
    {
        return $this->hasMany(HotelPriceChart::class, 'price_chart_type_id', 'id');
    }
    public function room_price ()
    {
        return $this->hasMany(HotelPriceChart::class, 'price_chart_type_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
