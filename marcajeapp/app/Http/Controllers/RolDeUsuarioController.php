<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolDeUsuario;

class RolDeUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roldeusuarios = RolDeUsuario::all();
        return $roldeusuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $roldeusuarios = new RolDeUsuario();

        $roldeusuarios->user_rol_name= $request->user_rol_name;

        $roldeusuarios->save();
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
        $roldeusuarios= RolDeUsuario::findOrFail($request->id);

        $roldeusuarios->user_rol_name= $request->user_rol_name;

        $roldeusuarios->save();
        return $roldeusuarios;
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
        $roldeusuarios= RolDeUsuario::destroy($request->id);
        return $roldeusuarios;
    }
}
