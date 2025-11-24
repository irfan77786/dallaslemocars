<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'booking_id' ,'booker_id', 'vehicle_id', 'pickup_location', 'dropoff_location',
        'pickup_date', 'pickup_time', 'return_date', 'return_time', 'total_price', 'payment_status','return_service_id','note', 'round_trip'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function booker() {
        return $this->belongsTo(Booker::class);
    }

    public function passengers() {
        return $this->hasMany(Passenger::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

public function returnService()
{
    return $this->belongsTo(ReturnService::class);
}

public function breakdown()
{
    return $this->hasOne(BookingBreakdown::class);
}
}
