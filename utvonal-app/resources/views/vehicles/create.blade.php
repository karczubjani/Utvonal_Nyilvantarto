<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gépjármű rögzítése</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Gépjármű rögzítése</h1>

        <form method="POST" action="{{ route('vehicles.store') }}" class="mb-4">
            @csrf
            <div class="form-group">
                <label for="plate_number">Rendszám:</label>
                <input type="text" id="plate_number" name="plate_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Típus:</label>
                <input type="text" id="type" name="type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="consumption">Fogyasztás (liter/100 km):</label>
                <input type="number" step="0.01" id="consumption" name="consumption" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Mentés</button>
        </form>

        <form method="GET" action="{{ route('routes.create') }}" class="mb-2">
            <button type="submit" class="btn btn-secondary">Tovább az útvonal rögzítéséhez</button>
        </form>

        <form method="GET" action="{{ route('routes.index') }}">
            <button type="submit" class="btn btn-secondary">Tovább a lekérdezéshez</button>
        </form>
    </div>
</body>
</html>