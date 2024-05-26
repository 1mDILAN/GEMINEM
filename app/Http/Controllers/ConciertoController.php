<?php

namespace App\Http\Controllers;

use App\Models\Concierto;
use Illuminate\Http\Request;
use App\Models\Organizador;

class ConciertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conciertos = Concierto::all();
        return view('conciertos.index', ['conciertos' => $conciertos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conciertos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $concierto = new Concierto();
        $concierto->nombre = $request->input('nombre');
        $concierto->total_entradas = $request->input('total_entradas');
        $concierto->descripcion = $request->input('descripcion');
        $concierto->fecha_inicio = $request->input('fecha_inicio');
        $concierto->fecha_fin = $request->input('fecha_fin');
        $concierto->ubicacion = $request->input('ubicacion');
        $concierto->save();
        return redirect()->route('conciertos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function show(Concierto $concierto)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function edit(Concierto $concierto)
    {
        return view('conciertos.edit', ['concierto' => $concierto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concierto $concierto)
    {
        $concierto->nombre = $request->input('nombre');
        $concierto->total_entradas = $request->input('total_entradas');
        $concierto->descripcion = $request->input('descripcion');
        $concierto->fecha_inicio = $request->input('fecha_inicio');
        $concierto->fecha_fin = $request->input('fecha_fin');
        $concierto->ubicacion = $request->input('ubicacion');
        $concierto->save();
        return redirect()->route('conciertos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concierto $concierto)
    {
        try {
            $concierto->delete();
            return redirect()->route('conciertos.index')->with('success', 'Concierto eliminado exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('conciertos.index')->with('error', 'No se puede eliminar el concierto, está relacionado con participaciones. Elimine primero las participaciones de ese concierto.');
        }
        // $conciertos->delete();
        return redirect()->route('conciertos.index');
    }
}
