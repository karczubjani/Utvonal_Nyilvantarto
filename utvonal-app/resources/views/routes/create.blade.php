<form method="POST" action="{{ route('routes.store') }}">
    @csrf
    <div>
        <label for="date_time">Dátum + idő:</label>
        <input type="datetime-local" id="date_time" name="date_time" required>
    </div>
    <div>
        <label for="from">Honnan:</label>
        <input type="text" id="from" name="from" required>
    </div>
    <div>
        <label for="to">Hová:</label>
        <input type="text" id="to" name="to" required>
    </div>
    <div>
        <label for="partner_name">Partner neve:</label>
        <input type="text" id="partner_name" name="partner_name" required>
    </div>
    <div>
        <label for="distance">Megtett km:</label>
        <input type="number" step="0.01" id="distance" name="distance" required>
    </div>
    <div>
        <label for="vehicle_id">Gépjármű:</label>
        <select id="vehicle_id" name="vehicle_id" required>
            @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->plate_number }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Mentés</button>
</form>