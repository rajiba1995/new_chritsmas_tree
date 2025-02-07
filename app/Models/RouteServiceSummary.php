<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RouteServiceSummary extends Model
{
    use HasFactory;
    protected $table = 'route_service_summaries';
    
    protected $fillable = [
       'service_type', 'route_id', 'destination_id', 'division_id', 'seasion_type_id'
    ];

    public function seasonType(){
        return $this->belongsTo(SeasionType::class, 'seasion_type_id', 'id');
    }

    public function destination(){
        return $this->belongsTo(State::class, 'destination_id', 'id');
    }
    public function route(){
        return $this->belongsTo(DestinationWiseRoute::class, 'route_id', 'id');
    }
    // Has Many
    public function activities(){
        return $this->hasMany(ServiceWiseActivity::class, 'service_summary_id', 'id');
    }

    public function sightseeings(){
        return $this->hasMany(ServiceWiseSightseeing::class, 'service_summary_id', 'id');
    }
    public function cabs(){
        return $this->hasMany(ServiceWiseCab::class, 'service_summary_id', 'id');
    }
}
