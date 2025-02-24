<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'country_code_id',
        'name',
        'status',
    ];

    public function country()
    {
        return $this->belongsTo(CountryCode::class, 'country_code_id', 'id');
    }
    public function seasonPeriod(){
        return $this->hasMany(DestinationSeasonPeriod::class,'destination_id','id');
    }

}
