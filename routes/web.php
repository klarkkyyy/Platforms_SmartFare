<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController; // Import the controller

// Home route
Route::get('/', function () {
    return view('welcome');  // Landing page
});

// Resourceful route for managing routes
Route::resource('routes', RouteController::class);
