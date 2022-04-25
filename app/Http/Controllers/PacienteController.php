<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            //return 'Vista index()';
     $pacientes = Paciente::all();
            return view('paciente.index')->with('pacientes',$pacientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paciente.create');
        
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
        $pacientes = new Paciente();
        $pacientes->numero_documento = $request->get('codigo');
        $pacientes->nombre1 = $request->get('nombre');
        $pacientes->apellido1 = $request->get('apellido');
      $pacientes->departamento_id = $request->get('departamento');
      //  $pacientes->apellido2 = $request->get('departamento');
      $pacientes->municipio_id = $request->get('municipio');

        $pacientes->save();

        return redirect('/pacientes');

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
        $paciente = Paciente::find($id);
         return view('paciente.edit')->with('paciente',$paciente);
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
        $paciente = Paciente::find($id);

        $paciente->numero_documento = $request->get('documento');
        $paciente->nombre1 = $request->get('nombre');
        $paciente->apellido1 = $request->get('apellido');
       // $paciente->departamento_id = $request->get('precio');
        $paciente->save();

        return redirect('/pacientes');
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
        $paciente = Paciente::find($id);        
        $paciente->delete();

        return redirect('/pacientes');
    }
}
