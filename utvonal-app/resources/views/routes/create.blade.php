<!DOCTYPE html>
<html>
<head>
    <title>Create Route</title>
</head>
<body>
    <h1>Create Route</h1>
    <form method="POST" action="{{ route('routes.store') }}">
        @csrf
        <label for="datetime">Date & Time:</label><br>
        <input type="datetime-local" id="datetime" name="datetime"><br><br>

        <label for="from">From:</label><br>
        <input type="text" id="from" name="from"><br><br>

        <label for="to">To:</label><br>
        <input type="text" id="to" name="to"><br><br>

        <label for="partner_name">Partner Name:</label><br>
        <input type="text" id="partner_name" name="partner_name"><br><br>

        <label for="distance">Distance (km):</label><br>
        <input type="number" id="distance" name="distance"><br><br>

        <label for="vehicle_plate_number">Vehicle Plate Number:</label><br>
        <input type="text" id="vehicle_plate_number" name="vehicle_plate_number">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
