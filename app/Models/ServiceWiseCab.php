<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceWiseCab extends Model
{
    protected $table = 'service_wise_cabs';
    protected $fillable =[
        'service_summary_id', 'division_wise_cab_id', 'cab_price'
    ];

    public function summary(){
        return $this->belongsTo(RouteServiceSummary::class, 'service_summary_id', 'id');
    }
    public function divisionCab(){
        return $this->belongsTo(DivisionWiseCab::class, 'division_wise_cab_id', 'id');
    }
}
