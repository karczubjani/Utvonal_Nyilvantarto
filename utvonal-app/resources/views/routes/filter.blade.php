

<form method="GET" action="{{ route('routes.index') }}">
    <label for="vehicle_id">Gépjármű kiválasztása:</label>
    <select id="vehicle_id" name="vehicle_id">
        <option value="">Összes gépjármű</option>
        @foreach($vehicles as $vehicle)
            <option value="{{ $vehicle->id }}">{{ $vehicle->plate_number }}</option>
        @endforeach
    </select>
    <button type="submit">Szűrés</button>
</form>