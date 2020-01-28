<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cariosmetodosrecursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //muestra el listado de todos los registros que tengo
        //return redirect()->action('holaController');
        //return redirect()->action('usuarioController@usuariounparametro',['nombre'=> 'Alejandro usuario controller']);
        return redirect('hola'); //redirecciona solo a una url
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //campos necesarios para poder crear un registro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //programacion para guardar informacion que estan contenidas en create
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar un solo registro
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //permite tener el formulario para poder editar un registro con campos y demas
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
        //actualiza los campos de edit
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar
    }
}
