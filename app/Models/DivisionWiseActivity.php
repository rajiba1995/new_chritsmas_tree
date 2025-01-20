<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionWiseActivity extends Model
{
    use HasFactory;
    protected $fillable = [
         'seasion_type_id', 'division_id', 'name', 'type', 'price', 'ticket_price'
    ];

    public function seasonType(){
        return $this->belongsTo(SeasionType::class, 'seasion_type_id', 'id');
    }

    public function division(){
        return $this>belongsTo(City::class, 'division_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(DivisionWiseActivityImage::class, 'division_wise_activity_id', 'id');
    }

}
