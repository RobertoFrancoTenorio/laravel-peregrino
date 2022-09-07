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
        Schema::create('antecedente_no_patologico', function (Blueprint $table){
            $table->increments('idAntecedenteNoPatologico');
            $table->boolean('mascota');
            $table->integer('NumeroHabitaciones');
            $table->integer('NumeroHabitantes');
            $table->boolean('ConsumoDeAlimentosCapeados');
            $table->string('GruposAlimenticios');
            $table->integer('CantidadDeComidasAlDia');
            $table->boolean('ConsumoDePan');
            $table->integer('idHistoriaClinica')->unsigned();

            $table->timestamps('');
            $table->foreign('idHistoriaClinica')->references('idHistoriaClinica')->on('historia_clinica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedente_no_patologico');
    }
};
