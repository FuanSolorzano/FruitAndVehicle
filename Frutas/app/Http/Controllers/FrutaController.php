<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas=Fruta::all();
        return view('frutas.index',compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frutas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $frutas=new Fruta();
        $frutas->Nombre=$request->Nombre;
        $frutas->Precio=$request->Precio;
        $frutas->Cantidad=$request->Cantidad;
        $frutas->save();
        return redirect('/frutas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fruta $fruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruta $fruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruta $fruta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruta $fruta)
    {
        //
    }
}
