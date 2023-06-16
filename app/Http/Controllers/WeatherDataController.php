<?php
namespace App\Http\Controllers;

use App\Models\WeatherData;
use Illuminate\Http\Request;

class WeatherDataController extends Controller
{
    public function index()
    {
        // Retrieve all weather data
        $weatherData = WeatherData::all();
        // Return the view or JSON response
    }

    public function show($timestamp)
    {
        // Retrieve a specific weather data by timestamp
        $data = WeatherData::find($timestamp);
        // Return the view or JSON response
    }
}
