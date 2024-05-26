<?php

namespace App\Http\Controllers;

use App\Models\Participacion;
use App\Models\Concierto;
use App\Models\Organizador;
use Illuminate\Http\Request;

class ParticipacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participaciones = Participacion::all();
        return view('participaciones.index', ['participaciones' => $participaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conciertos = Concierto::all();
        $organizadores = Organizador::all();
        return view('participaciones.create', ['conciertos' => $conciertos, 'organizadores' => $organizadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participacion = new Participacion();
        $participacion->concierto_id = $request->input('concierto_id');
        $participacion->organizador_id = $request->input('organizador_id');
        $participacion->rol = $request->input('rol');
        $participacion->save();
        return redirect()->route('participaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function show(Participacion $participacion)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Participacion $participacion)
    {
        $conciertos = Concierto::all();
        $organizadores = Organizador::all();
        return view('participaciones.edit', ['participacion' => $participacion, 'conciertos' => $conciertos, 'organizadores' => $organizadores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participacion $participacion)
    {
        $participacion->concierto_id = $request->input('concierto_id');
        $participacion->organizador_id = $request->input('organizador_id');
        $participacion->rol = $request->input('rol');
        $participacion->save();
        return redirect()->route('participaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participacion  $participacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participacion $participacion)
    {
        try {
            $participacion->delete();
            return redirect()->route('participaciones.index')->with('success', 'Participación eliminada exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('participaciones.index')->with('error', 'No se puede eliminar la participacion, consulte con el desarrollador para ayuda.');
        }
        return redirect()->route('participaciones.index');
    }
}
