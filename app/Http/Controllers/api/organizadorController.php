<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizador; // Agregué esta línea para utilizar el modelo de Organizador

class organizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizadores = Organizador::all();
        return response()->json($organizadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizador = new Organizador();
        $organizador->nombre = $request->input('nombre');
        $organizador->descripcion = $request->input('descripcion');
        $organizador->save();
        return response()->json($organizador);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organizador = Organizador::find($id);
        return response()->json($organizador);
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
        $organizador = Organizador::find($id);
        $organizador->nombre = $request->input('nombre');
        $organizador->descripcion = $request->input('descripcion');
        $organizador->save();
        return response()->json($organizador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizador = Organizador::find($id);
        $organizador->delete();
        return response()->json('Organizador eliminado con éxito');
    }
}
