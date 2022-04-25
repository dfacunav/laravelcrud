<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosPersonalesSeederdos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //guardar un solo registro
 $paciente = new Paciente();
$paciente->nombre1 = 'Ever Vasquez';
$paciente->genero_id = 20;
$paciente->departamento_id = 2;
$paciente->tipo_documento_id = 1;
$paciente->numero_documento= 11120;
$paciente->apellido1 = 'Los sur  5566';
$paciente->save();

    }
}
