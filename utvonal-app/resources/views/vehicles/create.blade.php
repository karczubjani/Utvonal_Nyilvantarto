<form method="POST" action="{{ route('vehicles.store') }}">
    @csrf
    <div>
        <label for="plate_number">Rendszám:</label>
        <input type="text" id="plate_number" name="plate_number" required>
    </div>
    <div>
        <label for="type">Típus:</label>
        <input type="text" id="type" name="type" required>
    </div>
    <div>
        <label for="consumption">Fogyasztás (liter/100 km):</label>
        <input type="number" step="0.01" id="consumption" name="consumption" required>
    </div>
    <button type="submit">Mentés</button>
</form>