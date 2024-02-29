<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Http\Requests\StoreJugadorRequest;
use App\Http\Requests\UpdateJugadorRequest;
use function Symfony\Component\String\b;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view("jugadores/jugador", ["jugadores" => $jugadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jugadores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJugadorRequest $request)
    {
        session()->flash("informacion", "Se ha guardado los datos");

        $datos = $request->input();
        $jugador = new Jugador($datos);
        $jugador->save();
        $jugadores = Jugador::all();
        return view("jugadores/jugador", ["jugadores" => $jugadores]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni)
    {
        $jugador = Jugador::where("dni", $dni)->first();
        return view("jugadores.edit", ["jugador" => $jugador]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJugadorRequest $request, string $dni)
    {
        session()->flash("informacion", "Se ha actualizado los datos");

        $jugador = Jugador::where("dni", $dni)->first();
        $jugador->update($request->input());
        $jugadores = Jugador::all();
        return view("jugadores.jugador", ["jugadores" => $jugadores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        session()->flash("informacion", "Se ha borrado los datos");

        $jugador = Jugador::where("dni", $dni)->first();
        $jugador->delete();
        $jugadores = Jugador::all();
        return view("jugadores.jugador", ["jugadores" => $jugadores]);
    }
}
