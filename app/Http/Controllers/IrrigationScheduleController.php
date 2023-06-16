<?php
namespace App\Http\Controllers;

use App\Models\IrrigationSchedule;
use Illuminate\Http\Request;

class IrrigationScheduleController extends Controller
{
    public function index()
    {
        // Retrieve all irrigation schedules
        $schedules = IrrigationSchedule::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific irrigation schedule by ID
        $schedule = IrrigationSchedule::find($id);
        // Return the view or JSON response
    }
}
