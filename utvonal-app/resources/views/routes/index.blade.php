<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Útvonalak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Útvonalak</h1>

        @include('routes.filter')

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Dátum + idő</th>
                        <th>Honnan</th>
                        <th>Hová</th>
                        <th>Partner neve</th>
                        <th>Megtett km</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($routes as $route)
                    <tr>
                        <td>{{ $route->datetime }}</td>
                        <td>{{ $route->from }}</td>
                        <td>{{ $route->to }}</td>
                        <td>{{ $route->partner_name }}</td>
                        <td>{{ $route->distance }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <h2>Összes megtett kilométer: {{ $totalDistance }} km</h2>
            <h2>Összes felhasznált üzemanyag: {{ $totalFuel }} liter</h2>
        </div>

        <div class="mt-4">
            <form method="GET" action="{{ route('routes.create') }}">
                <button type="submit" class="btn btn-primary">Tovább az útvonal rögzítéséhez</button>
            </form>
            <br>
            <form method="GET" action="{{ route('vehicles.create') }}">
                <button type="submit" class="btn btn-primary">Tovább a jármű rögzítéséhez</button>
            </form>
        </div>
    </div>
</body>
</html>