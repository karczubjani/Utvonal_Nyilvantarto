<!DOCTYPE html>
<html>
<head>
    <title>Route List</title>
</head>
<body>
    <h1>Route List</h1>
    <ul>
        @foreach($routes as $route)
            <li>
                {{ $route->from }} to {{ $route->to }}
                <a href="{{ route('routes.show', $route->id) }}">Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
