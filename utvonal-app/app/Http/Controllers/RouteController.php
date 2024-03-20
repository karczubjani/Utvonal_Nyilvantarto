<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Vehicle;

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
}