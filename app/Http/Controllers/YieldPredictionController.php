<?php
namespace App\Http\Controllers;

use App\Models\YieldPrediction;
use Illuminate\Http\Request;

class YieldPredictionController extends Controller
{
    public function index()
    {
        // Retrieve all yield predictions
        $predictions = YieldPrediction::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific yield prediction by ID
        $prediction = YieldPrediction::find($id);
        // Return the view or JSON response
    }
}
