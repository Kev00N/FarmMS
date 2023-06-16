<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model
{
    protected $primaryKey = 'timestamp';
    public $timestamps = false;
}
