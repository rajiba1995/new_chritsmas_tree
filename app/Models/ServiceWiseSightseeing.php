<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceWiseSightseeing extends Model
{
    protected $table = 'service_wise_sightseeings';

    protected $fillable = [
        'service_summary_id', 'sightseeing_id'
    ];

    public function summary(){
        return $this->belongsTo(RouteServiceSummary::class, 'service_summary_id', 'id');
    }
    public function sightseeing(){
        return $this->belongsTo(DivisionWiseSightseeing::class, 'sightseeing_id', 'id');
    }
}
