<?php
namespace App\Http\Controllers;

use App\Models\MaintenanceTasks;
use Illuminate\Http\Request;

class MaintenanceTasksController extends Controller
{
    public function index()
    {
        // Retrieve all maintenance tasks
        $tasks = MaintenanceTasks::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific maintenance task by ID
        $task = MaintenanceTasks::find($id);
        // Return the view or JSON response
    }
}
