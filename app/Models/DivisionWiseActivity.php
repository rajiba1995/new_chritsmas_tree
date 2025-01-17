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
        return $this->belongsTo(SeasionType::class);
    }

    public function division(){
        return $this>belongsTo(City::class);
    }

    public function images()
    {
        return $this->hasMany(DivisionWiseActivityImage::class);
    }

}
