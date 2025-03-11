<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisionWiseActivityImage extends Model
{
    use HasFactory;
    protected $fillable = [
         'division_wise_activity_id', 'file_path', 'destination_id'
    ];

    public function activity()
    {
        return $this->belongsTo(DivisionWiseActivity::class, 'division_wise_activity_id', 'id');
    }
}
