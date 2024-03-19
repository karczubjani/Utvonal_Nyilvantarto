<!DOCTYPE html>
<html>
<head>
    <title>Route Details</title>
</head>
<body>
    <h1>Route Details</h1>
    <p>Date & Time: {{ $route->datetime }}</p>
    <p>From: {{ $route->from }}</p>
    <p>To: {{ $route->to }}</p>
    <p>Partner Name: {{ $route->partner_name }}</p>
    <p>Distance: {{ $route->distance }} km</p>
    <p>Vehicle: {{ $route->vehicle->plate_number }}</p>
</body>
</html>
