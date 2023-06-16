<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorIntegration extends Model
{
    protected $primaryKey = 'sensor_integration_id';
    public $timestamps = false;

    // Define the relationships here if any
    public function thirdPartyIntegration()
    {
        return $this->belongsTo(ThirdPartyIntegration::class, 'integration_id', 'integration_id');
    }

    public function sensorData()
    {
        return $this->belongsTo(SensorData::class, 'sensor_id', 'sensor_id');
    }
}
