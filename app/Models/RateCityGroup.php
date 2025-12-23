<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateCityGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cities',
    ];

    protected $casts = [
        'cities' => 'array',
    ];

    public function vehicleRates()
    {
        return $this->hasMany(RateCityGroupVehicleRate::class, 'group_id');
    }
}

