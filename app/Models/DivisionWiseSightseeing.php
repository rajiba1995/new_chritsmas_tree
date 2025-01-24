<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisionWiseSightseeing extends Model
{
    use HasFactory;
    protected $table = "division_wise_sightseeings";
    protected $fillable = [
        'seasion_type_id', 'division_id', 'name', 'ticket_price'
   ];
    public function seasonType(){
        return $this->belongsTo(SeasionType::class, 'seasion_type_id', 'id');
    }

    public function division(){
        return $this>belongsTo(City::class, 'division_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(DivisionWiseSightseeingImage::class, 'sightseeing_id', 'id');
    }
}
