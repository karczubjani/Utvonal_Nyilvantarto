<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Details</title>
</head>
<body>
    <h1>Vehicle Details</h1>
    <p>Plate Number: {{ $vehicle->plate_number }}</p>
    <p>Type: {{ $vehicle->type }}</p>
    <p>Consumption: {{ $vehicle->consumption }}</p>
    <h2>Routes</h2>
    <ul>
        @foreach($vehicle->routes as $route)
            <li>
                <p>Date & Time: {{ $route->datetime }}</p>
                <p>From: {{ $route->from }}</p>
                <p>To: {{ $route->to }}</p>
                <p>Partner Name: {{ $route->partner_name }}</p>
                <p>Distance: {{ $route->distance }} km</p>
            </li>
        @endforeach
    </ul>
</body>
</html>