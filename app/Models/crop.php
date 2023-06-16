<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $primaryKey = 'crop_id';
    public $timestamps = false;

    // Define the relationships
    public function irrigationSchedules()
    {
        return $this->hasMany(IrrigationSchedule::class, 'crop_id', 'crop_id');
    }

    public function fertilizerRecommendations()
    {
        return $this->hasMany(FertilizerRecommendations::class, 'crop_id', 'crop_id');
    }

    public function diseaseDetections()
    {
        return $this->hasMany(DiseaseDetection::class, 'crop_id', 'crop_id');
    }

    public function yieldPredictions()
    {
        return $this->hasMany(YieldPrediction::class, 'crop_id', 'crop_id');
    }
}
