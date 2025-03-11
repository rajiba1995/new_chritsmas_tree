<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisionWiseSightseeingImage extends Model
{
   use HasFactory;
   protected $fillable = [
        'sightseeing_id', 'file_path', 'destination_id'
   ];

   public function sightseeing()
   {
       return $this->belongsTo(DivisionWiseSightseeing::class, 'sightseeing_id', 'id');
   }
}
