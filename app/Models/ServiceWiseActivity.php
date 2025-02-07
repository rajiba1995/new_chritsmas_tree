<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceWiseActivity extends Model
{
    protected $table = 'service_wise_activities';
    protected $fillable = [
        'service_summary_id', 'activity_id'
    ];

    public function summary(){
        return $this->belongsTo(RouteServiceSummary::class, 'service_summary_id', 'id');
    }
    public function activity(){
        return $this->belongsTo(DivisionWiseActivity::class, 'activity_id', 'id');
    }
}
