<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelPolicy extends Model
{
    protected $table = "hotel_policies";

    protected $fillable = [
        'id',
        'hotel_id',
        'content',
    ];
}
