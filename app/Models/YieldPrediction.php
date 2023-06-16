<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YieldPrediction extends Model
{
    protected $primaryKey = 'prediction_id';
    public $timestamps = false;

    // Define the relationships
    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crop_id', 'crop_id');
    }
}
