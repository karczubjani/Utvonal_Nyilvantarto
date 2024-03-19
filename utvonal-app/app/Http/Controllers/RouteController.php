<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Vehicle;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    public function show($id)
    {
        $route = Route::findOrFail($id);
        return view('routes.show', compact('route'));
    }
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('routes.create', compact('vehicles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'datetime' => 'required',
            'from' => 'required',
            'to' => 'required',
            'partner_name' => 'required',
            'distance' => 'required',
            'vehicle_id' => 'required',
        ]);
    
        // Kizárjuk az _token mezőt a kérésekből
        $data = $request->except('_token');
    
        Route::create($data);
    
        return redirect()->route('routes.index')
                         ->with('success', 'Route created successfully.');
    }

}

