<h1>Útvonalak</h1>

@include('routes.filter')

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

