<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participacion; // Agregué esta línea para utilizar el modelo de Participacion

class participacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participaciones = Participacion::all();
        return response()->json($participaciones);
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
        $participacion->nombre = $request->input('nombre');
        $participacion->lugar = $request->input('lugar');
        $participacion->fecha = $request->input('fecha');
        $participacion->save();
        return response()->json($participacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participacion = Participacion::find($id);
        return response()->json($participacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $participacion = Participacion::find($id);
        $participacion->nombre = $request->input('nombre');
        $participacion->lugar = $request->input('lugar');
        $participacion->fecha = $request->input('fecha');
        $participacion->save();
        return response()->json($participacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participacion = Participacion::find($id);
        $participacion->delete();
        return response()->json('Participacion eliminada con éxito');
    }
}
