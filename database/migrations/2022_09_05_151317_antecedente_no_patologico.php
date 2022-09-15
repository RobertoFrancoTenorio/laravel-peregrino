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
            $table->string('pac_mascota');
            $table->string('pac_mascota_tipo')->nullable();
            $table->integer('pac_NumeroHabitaciones');
            $table->integer('pac_NumeroHabitantes');
            $table->string('pac_ConsumoDeAlimentosCapeados');
            $table->string('pac_GruposAlimenticios');
            $table->integer('pac_CantidadDeComidasAlDia');
            $table->string('pac_ConsumoDePan');
            $table->string('pac_ConsumoDeSal');
            $table->string('pac_ConsumoDeRefresco');
            $table->text('observaciones')->nullable();
            $table->integer('idHistoriaClinica')->unsigned();

            $table->timestamps();
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
