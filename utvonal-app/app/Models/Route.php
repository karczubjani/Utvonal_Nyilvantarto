<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['datetime', 'from', 'to', 'partner_name', 'distance', 'vehicle_id', '_token'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}

