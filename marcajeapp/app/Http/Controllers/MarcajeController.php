<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Empleado;
use App\Http\Models\Marcaje;

class MarcajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Sets the order by criteria.
        $marcajes = Marcaje::orderBy('fecha_marcaje','desc')->get();
        return $marcajes; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empleados = Empleado::all();
        return $empleados; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $marcajes = Marcaje::findOrFail($request->id);

        $marcajes->id_emp= $request->id_emp;
        $marcajes->fecha_marcaje= $request->fecha_marcaje;
        $marcajes->hora_marcaje=$request->hora_marcaje;

        $marcajes->save();
        return $marcajes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $marcajes=Marcaje::destroy($request->id);
        return $marcajes;

    }
}
