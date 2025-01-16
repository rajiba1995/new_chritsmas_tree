<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionWiseCab extends Model
{
    protected $table = "division_wise_cabs";

    protected $fillable = [
        'division_id',
        'seasion_type_id',
        'cab_id',
    ];
}
