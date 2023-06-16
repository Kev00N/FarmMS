<?php
namespace App\Http\Controllers;

use App\Models\DiseaseDetection;
use Illuminate\Http\Request;

class DiseaseDetectionController extends Controller
{
    public function index()
    {
        // Retrieve all disease detections
        $detections = DiseaseDetection::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific disease detection by ID
        $detection = DiseaseDetection::find($id);
        // Return the view or JSON response
    }
}
