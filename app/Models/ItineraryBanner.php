<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItineraryBanner extends Model
{
    use HasFactory;
    protected $table = "itinerary_banners";
    protected $fillable = [
        'title', 'division_id','destination_id', 'image', 'status', 'created_at', 'updated_at'
    ];

    public function division(){
        return $this->belongsTo(City::class,'division_id');
    }
}
