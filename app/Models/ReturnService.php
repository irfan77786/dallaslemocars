<?php 
// app/Models/ReturnService.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReturnService extends Model
{
    use HasFactory;
    protected $table= 'return_service';
    protected $fillable = [
        'vehicle_id',
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'pickup_time',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
