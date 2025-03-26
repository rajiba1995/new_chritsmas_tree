<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DestinationWiseRoute extends Model
{
    use HasFactory;
    protected $table = "destination_wise_routes";
    protected $fillable = [
        'route_name', 'destination_id', 'seasion_type_id', 'total_distance_km', 'total_travel_time'
   ];
    public function seasonType(){
        return $this->belongsTo(SeasionType::class, 'seasion_type_id', 'id');
    }

    public function destination(){
        return $this>belongsTo(State::class, 'destination_id', 'id');
    }
    public function waypoints ()
    {
        return $this->hasMany(DestinationWiseRouteWaypoint::class, 'route_id', 'id')->orderBy('positions', 'ASC');;
    }
}
