<?php

namespace App\Http\Controllers;

use App\Models\Route;  // Import the Route model
use Illuminate\Http\Request;

class RouteController extends Controller
{
    // Show all routes
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    // Show a specific route
    public function show($id)
    {
        $route = Route::findOrFail($id);
        return view('routes.show', compact('route'));
    }

    // Show form to create a new route
    public function create()
    {
        return view('routes.create');
    }

    // Store new route in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'route_name' => 'required|string|max:255',
            'base_fare' => 'required|numeric',
            'fare_per_km' => 'required|numeric',
        ]);

        Route::create([
            'route_name' => $validated['route_name'],
            'base_fare' => $validated['base_fare'],
            'fare_per_km' => $validated['fare_per_km'],
        ]);

        return redirect()->route('routes.index')->with('success', 'Route created successfully!');
    }

    // Show form to edit an existing route
    public function edit($id)
    {
        $route = Route::findOrFail($id);
        return view('routes.edit', compact('route'));
    }

    // Update the existing route in the database
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'route_name' => 'required|string|max:255',
            'base_fare' => 'required|numeric',
            'fare_per_km' => 'required|numeric',
        ]);

        $route = Route::findOrFail($id);
        $route->update($validated);

        return redirect()->route('routes.index')->with('success', 'Route updated successfully!');
    }

    // Delete a route from the database
    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('routes.index')->with('success', 'Route deleted successfully!');
    }
}
