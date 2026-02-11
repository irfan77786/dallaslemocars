<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateCityGroupVehicleRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'vehicle_id',
        'distance_rates',
        'waiting_time_rates',
        'gratuity',
        'base_rate',
    ];

    protected $casts = [
        'distance_rates' => 'array',
        'waiting_time_rates' => 'array',
    ];

    public function group()
    {
        return $this->belongsTo(RateCityGroup::class, 'group_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}

