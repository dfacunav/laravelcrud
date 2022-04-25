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
        Schema::create('municipios', function (Blueprint $table) {
           
            $table->id();
            $table->integer('mun_id');
    
          //  $table->bigInteger('dpto_id');
    
            $table->string('nombre',60);
            $table->timestamps();
    
            $table->bigInteger('dpto_id')->unsigned();            
    $table->foreign('dpto_id')->references('id')->on('departamentos');


        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
};
