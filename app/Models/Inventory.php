<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'division_id', 'destination_id', 'category_id'];

  
    public function destination()
    {
        return $this->belongsTo(State::class, 'destination_id', 'id');
    }
    public function division()
    {
        return $this->belongsTo(City::class, 'division_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function hotel()
    {
        return $this->belongsTo(Category::class, 'hotel_id', 'id');
    }
   
    
}