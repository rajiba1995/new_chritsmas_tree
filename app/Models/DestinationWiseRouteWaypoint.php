<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DestinationWiseRouteWaypoint extends Model
{
    use HasFactory;
    protected $table = "destination_wise_route_waypoints";
    protected $fillable = [
      'route_id', 'point_name', 'division_id', 'sequence', 'distance_from_previous_km', 'travel_time_from_previous','positions'
   ];
    public function route(){
        return $this->belongsTo(DestinationWiseRoute::class, 'route_id', 'id');
    }

    public function division(){
        return $this->belongsTo(City::class, 'division_id', 'id');
    }
}
