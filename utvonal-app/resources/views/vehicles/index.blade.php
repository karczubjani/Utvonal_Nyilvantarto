<!DOCTYPE html>
<html>
<head>
    <title>Vehicle List</title>
</head>
<body>
    <h1>Vehicle List</h1>
    <ul>
        @foreach($vehicles as $vehicle)
            <li>{{ $vehicle->plate_number }} - {{ $vehicle->type }}</li>
        @endforeach
    </ul>
</body>
</html>
