<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseDetection extends Model
{
    protected $primaryKey = 'detection_id';
    public $timestamps = false;

    // Define the relationships
    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crop_id', 'crop_id');
    }
}
