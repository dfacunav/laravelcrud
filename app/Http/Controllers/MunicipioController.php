<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipios;

class MunicipioController extends Controller
{
    //

public $dpto_id;

    public function index()
    {
        //$municipios = Municipios::find($dpto_id);
        //return view('paciente.create')->with('municipios',$municipios);

        $municipio = Municipios::all();
        return view('paciente.create')->with('municipio',$municipio);

    }
  
    public function nombre_funcion(Request $request)
    {
       $detalle = Municipios::find($id);
      return response()->json($detalle);
    }

}
