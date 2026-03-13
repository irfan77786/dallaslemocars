<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'vehicle_type',
        'trip_type',
        'number_of_passengers',
        'trip_date',
        'trip_time',
        'pickup_address',
        'dropoff_address',
        'full_name',
        'email',
        'message',
    ];
}
