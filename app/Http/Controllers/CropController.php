<?php
namespace App\Http\Controllers;

use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        // Retrieve all crops
        $crops = Crop::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific crop by ID
        $crop = Crop::find($id);
        // Return the view or JSON response
    }
}
