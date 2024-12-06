<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Route</title>
</head>
<body>
    <h1>Edit Route</h1>

    <form action="{{ route('routes.update', $route->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="route_name">Route Name</label>
        <input type="text" name="route_name" id="route_name" value="{{ $route->route_name }}" required>

        <label for="base_fare">Base Fare</label>
        <input type="number" name="base_fare" id="base_fare" value="{{ $route->base_fare }}" step="0.01" required>

        <label for="fare_per_km">Fare per Km</label>
        <input type="number" name="fare_per_km" id="fare_per_km" value="{{ $route->fare_per_km }}" step="0.01" required>

        <button type="submit">Update Route</button>
    </form>
</body>
</html>
