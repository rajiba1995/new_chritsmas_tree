<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\softDeletes;


class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'destination', 
        'division', 
        'hotel_category', 
        'number_of_rooms', 
        'phone_code', 
        'mobile_number', 
        'whatsapp_number', 
        'email1', 
        'email2', 
        'created_by', 
        'status'
    ];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }
    public function DestinationData(): BelongsTo
    {
        return $this->belongsTo(State::class, 'destination', 'id');
    }
    public function DivisionData(): BelongsTo
    {
        return $this->belongsTo(City::class, 'division', 'id');
    }
    public function CategoryData(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'hotel_category', 'id');
    }
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'room_amenity', 'room_id', 'amenity_id');
    }
    public function images()
    {
        return $this->hasMany(HotelImage::class); // Assuming HotelImage is the model for hotel images
    }
    public function seasiontimes()
    {
        return $this->hasMany(HotelSeasionTime::class); // Assuming HotelImage is the model for hotel images
    }
}
