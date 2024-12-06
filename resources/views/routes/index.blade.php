<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes</title>
</head>
<body>
    <h1>All Routes</h1>

    <a href="{{ route('routes.create') }}">Create New Route</a>

    <table>
        <tr>
            <th>Route Name</th>
            <th>Base Fare</th>
            <th>Fare per Km</th>
            <th>Actions</th>
        </tr>
        @foreach($routes as $route)
            <tr>
                <td>{{ $route->route_name }}</td>
                <td>{{ $route->base_fare }}</td>
                <td>{{ $route->fare_per_km }}</td>
                <td>
                    <a href="{{ route('routes.edit', $route->id) }}">Edit</a>
                    <form action="{{ route('routes.destroy', $route->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
