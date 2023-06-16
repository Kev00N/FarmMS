<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IrrigationSchedule extends Model
{
    protected $primaryKey = 'schedule_id';
    public $timestamps = false;

    // Define the relationships
    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crop_id', 'crop_id');
    }
}
