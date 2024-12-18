<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPriceChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_chart_type_id',
        'hotel_id',
        'room_id',
        'plan_title',
        'plan_item',
        'item_price',
    ];

    // Relationships
    public function priceChartType()
    {
        return $this->belongsTo(HotelPriceChartType::class, 'price_chart_type_id');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
