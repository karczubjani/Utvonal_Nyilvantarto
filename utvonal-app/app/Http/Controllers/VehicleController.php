<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'plate_number' => 'required|string',
            'type' => 'required|string',
            'consumption' => 'required|numeric',
        ]);

        Vehicle::create($validatedData);

        return redirect('/vehicles/create')->with('success', 'Gépjármű sikeresen rögzítve!');
    }
}