<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CountryCode extends Model
{
    use HasFactory;

    protected $table = "country_codes";

    protected $fillable = [
        'id',
        'country_code',
        'country_name',
        'phone_code',
        'phone_length',
    ];

    
    public function states()
    {
        return $this->hasMany(State::class, 'country_code_id', 'id');
    }
}