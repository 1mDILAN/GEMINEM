<?php

namespace App\Http\Controllers;

use App\Models\Locacion;
use Illuminate\Http\Request;

class LocacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locaciones = Locacion::all();
        return view('locaciones.index', ['locaciones' => $locaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locacion = new Locacion();
        $locacion->nombre = $request->input('nombre');
        $locacion->direccion = $request->input('direccion');
        $locacion->capacidad = $request->input('capacidad');
        $locacion->save();
        return redirect()->route('locaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function show(Locacion $locacion)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Locacion $locacion)
    {
        return view('locaciones.edit', ['locacion' => $locacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locacion $locacion)
    {
        $locacion->nombre = $request->input('nombre');
        $locacion->direccion = $request->input('direccion');
        $locacion->capacidad = $request->input('capacidad');
        $locacion->save();
        return redirect()->route('locaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locacion $locacion)
    {
        try {
            $locacion->delete();
            return redirect()->route('locaciones.index')->with('success', 'Locación eliminada exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('locaciones.index')->with('error', 'No se puede eliminar la locación, está relacionada con conciertos. Elimine primero los conciertos de esa locación.');
        }
        return redirect()->route('locaciones.index');
    }
}