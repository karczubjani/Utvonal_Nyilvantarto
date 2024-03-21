<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Útvonal rögzítése</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Útvonal rögzítése</h1>

        <form method="POST" action="{{ route('routes.store') }}" class="mb-4">
            @csrf
            <div class="form-group">
                <label for="date_time">Dátum + idő:</label>
                <input type="datetime-local" id="date_time" name="date_time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="from">Honnan:</label>
                <input type="text" id="from" name="from" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="to">Hová:</label>
                <input type="text" id="to" name="to" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="partner_name">Partner neve:</label>
                <input type="text" id="partner_name" name="partner_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="distance">Megtett km:</label>
                <input type="number" step="0.01" id="distance" name="distance" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="vehicle_id">Gépjármű:</label>
                <select id="vehicle_id" name="vehicle_id" class="form-control" required>
                    @foreach($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->plate_number }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mentés</button>
        </form>

        <form method="GET" action="{{ route('vehicles.create') }}" class="mb-2">
            <button type="submit" class="btn btn-secondary">Tovább a jármű rögzítéséhez</button>
        </form>

        <form method="GET" action="{{ route('routes.index') }}">
            <button type="submit" class="btn btn-secondary">Tovább a lekérdezéshez</button>
        </form>
    </div>
</body>
</html>