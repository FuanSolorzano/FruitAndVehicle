<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=vehiculo::all();
        return view('Vehiculos.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo=new vehiculo();
        $vehiculo->Marca=$request->Marca;
        $vehiculo->Modelo=$request->Modelo;
        $vehiculo->Tipo=$request->Tipo;
        $vehiculo->save();
        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     */
    public function show(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehiculo $vehiculo)
    {
        //
    }
}
