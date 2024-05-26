<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Concierto; // Agregué esta línea para utilizar el modelo de Concierto

class conciertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conciertos = Concierto::all();
        return response()->json($conciertos);
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
        $concierto->lugar = $request->input('lugar');
        $concierto->fecha = $request->input('fecha');
        $concierto->save();
        return response()->json($concierto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concierto = Concierto::find($id);
        return response()->json($concierto);
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
        $concierto = Concierto::find($id);
        $concierto->nombre = $request->input('nombre');
        $concierto->lugar = $request->input('lugar');
        $concierto->fecha = $request->input('fecha');
        $concierto->save();
        return response()->json($concierto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concierto = Concierto::find($id);
        $concierto->delete();
        return response()->json(['mensaje' => 'Concierto eliminado']);
    }
}
