<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class FareCalculatorController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('fare_calculator', compact('routes'));
    }

    public function calculateFare(Request $request)
    {
        $route = Route::find($request->route_id);
        $distance = $request->distance;  // Distance in kilometers

        if ($route) {
            $total_fare = $route->base_fare + ($distance * $route->fare_per_km);
            return view('fare_calculator', compact('route', 'total_fare', 'distance'));
        } else {
            return redirect()->back()->withErrors('Route not found');
        }
    }
}
