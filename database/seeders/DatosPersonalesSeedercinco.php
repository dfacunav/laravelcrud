<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosPersonalesSeedercinco extends Seeder
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
        $paciente->nombre1 = 'Fernando ';
        $paciente->genero_id = 20;
        $paciente->departamento_id = 2;
        $paciente->tipo_documento_id = 1;
        $paciente->numero_documento= 5976;
        $paciente->apellido1 = 'restrepo  5566';
        $paciente->save();
        

    }
}
