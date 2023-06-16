<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $primaryKey = 'sensor_id';
    public $timestamps = false;

    // Define the relationships
    public function sensorIntegration()
    {
        return $this->belongsTo(SensorIntegration::class, 'sensor_id', 'sensor_id');
    }
}
