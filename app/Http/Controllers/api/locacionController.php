<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Locacion; // Agregué esta línea para utilizar el modelo de Locacion

class locacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locaciones = Locacion::all();
        return response()->json($locaciones);
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
        return response()->json($locacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locacion = Locacion::find($id);
        return response()->json($locacion);
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
        $locacion = Locacion::find($id);
        $locacion->nombre = $request->input('nombre');
        $locacion->direccion = $request->input('direccion');
        $locacion->capacidad = $request->input('capacidad');
        $locacion->save();
        return response()->json($locacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locacion = Locacion::find($id);
        $locacion->delete();
        return response()->json(['mensaje' => 'Locación eliminada con éxito']);
    }
}
