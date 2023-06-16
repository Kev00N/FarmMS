<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceUsage extends Model
{
    protected $primaryKey = 'usage_id';
    public $timestamps = false;

    // Define the relationships
    public function farmEquipment()
    {
        return $this->belongsTo(FarmEquipment::class, 'equipment_id', 'equipment_id');
    }
}
