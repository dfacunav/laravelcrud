<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Paciente;

class DatosPersonalesSeeder extends Seeder
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
$paciente->nombre1 = 'Daniel Miranda';
$paciente->genero_id = 18;
$paciente->departamento_id = 18;
$paciente->tipo_documento_id = 18;
$paciente->numero_documento= 18;
$paciente->apellido1 = 'Los Lirios #5566';
$paciente->save();
        


    }
}
