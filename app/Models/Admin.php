<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'admins';

    // Allow mass assignment for these attributes
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    // Define the hidden attributes (e.g., password, remember_token)
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Set the default password hashing
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Optionally, you can define custom methods related to roles or permissions
}
