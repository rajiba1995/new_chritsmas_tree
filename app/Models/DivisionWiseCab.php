<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DivisionWiseCab extends Model
{
    protected $table = "division_wise_cabs";

    protected $fillable = [
        'division_id',
        // 'seasion_type_id',
        'cab_id',
        'status',
    ];

    public function division(): BelongsTo
    {
        return $this->belongsTo(City::class, 'division_id', 'id');
    }
    public function stype(): BelongsTo
    {
        return $this->belongsTo(SeasionType::class, 'seasion_type_id', 'id');
    }
    public function cab(): BelongsTo
    {
        return $this->belongsTo(Cab::class, 'cab_id', 'id');
    }
}
