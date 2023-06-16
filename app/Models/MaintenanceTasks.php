<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTasks extends Model
{
    protected $primaryKey = 'task_id';
    public $timestamps = false;

    // Define the relationships
    public function farmEquipment()
    {
        return $this->belongsTo(FarmEquipment::class, 'equipment_id', 'equipment_id');
    }
}
