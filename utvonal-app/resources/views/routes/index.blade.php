<h1>Útvonalak</h1>

@include('routes.filter')

<div>
<table>
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

<div>
<form method="GET" action="{{ route('routes.create') }}">
    <button type="submit" class="btn btn-secondary">Tovább az útvonal rögzítéséhez</button>
</form>

<form method="GET" action="{{ route('vehicles.create') }}">
    <button type="submit" class="btn btn-secondary">Tovább a jármű rögzítéséhez</button>
</form>
</div>