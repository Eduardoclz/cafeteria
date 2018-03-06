<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $comidas = \App\Comida::all();
        $argumentos = array();
        $exito = $request->input('exito');
        $argumentos["comidas"] = $comidas;
        $argumentos["exito"]= $exito;
        return view("comidas.index", $argumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $argumentos = array();
        return view('comidas.create', $argumentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $nombre = $request->input('txtNombre');
   $precio = $request->input('txtPrecio');
   $nuevaComida = new \App\Comida;
   $nuevaComida->nombre = $nombre;
   $nuevaComida->precio = $precio;

$respuesta = array();
$respuesta["exito"]= false;
if ($nuevaComida->save()){
    $respuesta["exito"]= true;
}
return redirect()->route('comidas.index',$respuesta);
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
      $comidas = \App\Comida::find($id);
      $argumentos = array();
      $argumentos['comidas'] = $comidas;
      return view ('comidas.edit',$argumentos);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
