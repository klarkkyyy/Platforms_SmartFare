<?php

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    public function run()
    {
        Route::create([
            'route_name' => 'Makati to Quezon City',
            'base_fare' => 15.00,
            'fare_per_km' => 5.00,
        ]);

        Route::create([
            'route_name' => 'Makati to Pasig',
            'base_fare' => 12.00,
            'fare_per_km' => 4.00,
        ]);
    }
}


