<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "cities";
    protected $fillable = [
        'id',
        'name',
        'status',
    ];
    public function DestinationData(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
