<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class DynamicDependent extends Controller
{
    //


    function index()
    {
        $departamentos = Departamentos::all();
         return view('pacientes.create')->with('departamentos', $departamentos);

    }

}
