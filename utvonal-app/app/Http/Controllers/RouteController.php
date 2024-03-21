<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Vehicle;
use Carbon\Carbon;

class RouteController extends Controller
{
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('routes.create', compact('vehicles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_time' => 'required|date',
            'from' => 'required|string',
            'to' => 'required|string',
            'partner_name' => 'required|string',
            'distance' => 'required|numeric',
            'vehicle_id' => 'required|exists:vehicles,id',
        ]);

        Route::create($validatedData);

        return redirect('/routes/create')->with('success', 'Útvonal sikeresen rögzítve!');
    }

    public function index(Request $request)
    {
        $vehicles = Vehicle::all();
        $vehicleId = $request->input('vehicle_id');
        $routesQuery = Route::query();
        $validatedData['datetime'] = Carbon::parse($request->date_time);

        if ($vehicleId) {
            $routesQuery->where('vehicle_id', $vehicleId);
        }
    
        $routes = $routesQuery->get();
    
        // Összes megtett távolság számítása
        $totalDistance = $routes->sum('distance');
    
        // Összes útvonalhoz tartozó gépjárművek lekérése
        $vehicles = Vehicle::all();
    
        // Összes felhasznált üzemanyag kiszámítása
        $totalFuel = 0;
        foreach ($routes as $route) {
            foreach ($vehicles as $vehicle) {
                if ($route->vehicle_id == $vehicle->id) {
                    $totalFuel += ($route->distance * $vehicle->consumption) / 100;
                    break;
                }
            }
        }
    
        return view('routes.index', compact('routes', 'totalDistance', 'totalFuel', 'vehicles'));
    }
}