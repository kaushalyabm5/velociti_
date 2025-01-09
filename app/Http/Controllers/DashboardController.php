<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();  // Get the authenticated user
        return view('dashboard', compact('user'));  // Pass user data to the view
    }
}
