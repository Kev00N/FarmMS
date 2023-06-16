<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentIntegration extends Model
{
    protected $primaryKey = 'equipment_integration_id';
    public $timestamps = false;

    // Define the relationships here if any
    public function thirdPartyIntegration()
    {
        return $this->belongsTo(ThirdPartyIntegration::class, 'integration_id', 'integration_id');
    }

    public function farmEquipment()
    {
        return $this->belongsTo(FarmEquipment::class, 'equipment_id', 'equipment_id');
    }
}
