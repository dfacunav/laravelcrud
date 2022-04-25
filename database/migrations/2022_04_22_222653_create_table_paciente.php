<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
         $table->bigInteger('tipo_documento_id');
         $table->string('numero_documento',20);
         $table->string('nombre1',60);
         $table->string('nombre2',60);
         $table->string('apellido1',60);
         $table->string('apellido2',60);
         $table->bigInteger('genero_id');
         $table->bigInteger('departamento_id');
         $table->bigInteger('municipio_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
};
