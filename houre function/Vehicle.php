<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_name',
        'vehicle_code',
        'number_of_passengers',
        'luggage_capacity',
        'active',
        'greeting_fee',
        'description',
        'slug',
    ];

    
    public function rateVehicle()
    {
        return $this->hasMany(RateVehicle::class);
    }

    public function carSeat()
    {
        return $this->hasMany(CarSeat::class);
    }

    public static function minimumHourlyHoursForPassengers(int $passengerCount): int
    {
        if ($passengerCount <= 6) {
            return 3;
        }

        if ($passengerCount > 18) {
            return 5;
        }

        return 4;
    }

    public function minimumHourlyHours(): int
    {
        return self::minimumHourlyHoursForPassengers((int) $this->number_of_passengers);
    }

    // public function getBreakDownAttribute()
    // {
    //     return $this->rateVehicle->breakDown ?? null;
    // }
}
