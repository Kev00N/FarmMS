<?php
namespace App\Http\Controllers;

use App\Models\FarmEquipment;
use Illuminate\Http\Request;

class FarmEquipmentController extends Controller
{
    public function index()
    {
        // Retrieve all farm equipment
        $equipment = FarmEquipment::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific farm equipment by ID
        $equipment = FarmEquipment::find($id);
        // Return the view or JSON response
    }
}
