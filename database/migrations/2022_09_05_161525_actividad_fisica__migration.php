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
        Schema::create('actividad_fisica', function (Blueprint $table){
            $table->increments('idActividadFisica');
            $table->string('actividad_frecuencia');
            $table->string('actividad_nombre');
            $table->boolean('estatusActividadFisica');
            $table->integer('idAntecedenteNoPatologico')->unsigned();
            $table->timestamps();

            $table->foreign('idAntecedenteNoPatologico')->references('idAntecedenteNoPatologico')->on('antecedente_no_patologico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_fisica');
    }
};
