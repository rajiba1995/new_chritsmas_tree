<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DestinationSeasonPeriod extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'destination_id',
        'season_type_id',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    public function season()
    {
        return $this->belongsTo(SeasionType::class, 'season_type_id', 'id');
    }
    public function destination()
    {
        return $this->belongsTo(State::class, 'destination_id', 'id');
    }
}
