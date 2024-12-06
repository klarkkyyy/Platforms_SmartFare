<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Jeepney Fare Calculator</title>
</head>
<body>

<h1>Auto-Jeepney Fare Calculator</h1>

<form action="{{ route('calculateFare') }}" method="POST">
    @csrf
    <label for="route_id">Select Route:</label>
    <select name="route_id" id="route_id" required>
        @foreach ($routes as $route)
            <option value="{{ $route->id }}">{{ $route->route_name }}</option>
        @endforeach
    </select>

    <label for="distance">Distance (in km):</label>
    <input type="number" name="distance" id="distance" required>

    <button type="submit">Calculate Fare</button>
</form>

@if(isset($total_fare))
    <h2>Fare Details</h2>
    <p>Route: {{ $route->route_name }}</p>
    <p>Distance: {{ $distance }} km</p>
    <p>Total Fare: ₱{{ number_format($total_fare, 2) }}</p>
@endif

</body>
</html>
