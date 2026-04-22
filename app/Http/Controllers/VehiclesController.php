<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        $vehicles = Vehicle::where('user_id', $userId)
                        ->orderBy('created_at', 'asc')
                        ->get();
        return view('garage', ['vehicles'=>$vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiclesForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'year_of_prod' => ['required', 'integer', 'min_digits:4', 'max_digits:4'],
            'engine_capacity' => ['required', 'integer', 'min_digits:2', 'max_digits:5'],
            'power' => ['required', 'integer', 'max_digits:4'],
            'description' => ['max:255'],
        ]);

        if(Auth::id() == null){
            return view('home');
        }

        $vehicle = Vehicle::create([
            'user_id' => Auth::user()->id,
            'brand' => $request->brand,
            'model' => $request->model,
            'year_of_prod' => $request->year_of_prod,
            'engine_capacity' => $request->engine_capacity,
            'power' => $request->power,
            'description' => $request->description,
        ]);

        if($vehicle->save()){
            return redirect()->route('garage', ['id'=>Auth::user()->id]);
        }
        return view('garage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::find($id);
        if(Auth::user()->id != $vehicle->user_id){
            return back()->with(['success' => false, 'message_type' => 'danger',
            'message' => 'Nie posiadasz uprawnień do edycji tej zawartości.']);
        }
        return view('vehicleEditForm', ['vehicle'=>$vehicle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehicle = Vehicle::find($id);
        if(Auth::user()->id != $vehicle->user_id){
            return back()->with(['success' => false, 'message_type' => 'danger',
            'message' => 'Nie posiadasz uprawnień do edycji tej zawartości.']);
        }
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->year_of_prod = $request->year_of_prod;
        $vehicle->engine_capacity = $request->engine_capacity;
        $vehicle->power = $request->power;
        $vehicle->description = $request->description;
        if($vehicle->save()){
            return redirect()->route('garage', ['id'=>Auth::user()->id]);
        }
        return "Wystąpił błąd.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $vehicle = Vehicle::find($id);
        if(Auth::user()->id != $vehicle->user_id){
            return back();
        }
        if($vehicle->delete()){
            return redirect()->route('garage', ['id'=>Auth::user()->id]);
        }
        else return back();
    }
}
