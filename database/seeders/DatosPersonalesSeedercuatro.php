<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosPersonalesSeedercuatro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $paciente = new Paciente();
        $paciente->nombre1 = 'Merces ';
        $paciente->genero_id = 20;
        $paciente->departamento_id = 2;
        $paciente->tipo_documento_id = 1;
        $paciente->numero_documento= 1110298;
        $paciente->apellido1 = 'Los Prueba dir  5566';
        $paciente->save();
        

    }
}
