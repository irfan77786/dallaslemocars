<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoredLocation extends Model
{
    protected $table = 'stored_locations';

    protected $fillable = [
        'address_type',
        'address',
        'apt_suite',
        'location_label',
    ];
}
