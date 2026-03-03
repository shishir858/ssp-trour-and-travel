<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredRoutes = Route::where('is_popular', true)
            ->where('is_active', true)
            ->take(6)
            ->get();

        $featuredVehicles = Vehicle::where('is_active', true)
            ->take(6)
            ->get();

        return view('home', compact('featuredRoutes', 'featuredVehicles'));
    }
}
