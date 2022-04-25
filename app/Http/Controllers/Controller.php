<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Departamentos;
use App\Models\Municipios;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $selecdpto= null , $seleciudad= null , $dpto_id= null;
    public $selecciondpto= null ;
    public $municipios= null ;

    public function index()
    {
        //
            //return 'Vista index()';
     $departamentos = Departamentos::all();
     $municipios = Municipios::all();

            return view('paciente.create')->with('departamentos',$departamentos)
            ->with('municipios',$municipios)
            ;
          //  $detalle = Municipios::find($id);
            //return response()->json($detalle);

    }



    public function updatedselecdpto($dpto_id)
    {
                 // $municipios = Municipios::find($dpto_id);
        // return ('municipios',$municipios);
      $this-> $municipios = Municipios::where('dpto_id',$dpto_id)-> get ();
    }

}
