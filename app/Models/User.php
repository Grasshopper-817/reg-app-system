<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
