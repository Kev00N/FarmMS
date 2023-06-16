<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThirdPartyIntegration extends Model
{
    protected $primaryKey = 'integration_id';
    public $timestamps = false;

    // Define the relationships here if any
    public function sensorIntegration()
    {
        return $this->hasMany(SensorIntegration::class, 'integration_id', 'integration_id');
    }

    public function equipmentIntegration()
    {
        return $this->hasMany(EquipmentIntegration::class, 'integration_id', 'integration_id');
    }
}
