<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all();
        // Return the view or JSON response
    }

    public function show($id)
    {
        // Retrieve a specific user by ID
        $user = User::find($id);
        // Return the view or JSON response
    }
}
