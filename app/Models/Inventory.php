<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'room_id', 'date', 'total_sold','total_unsold', 'block_request_type'];

}