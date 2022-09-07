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
        Schema::create('antecedente_patologico', function (Blueprint $table){
            $table->increments('idAntecedentePatologico');
            $table->boolean('antecedente_patologico_hospitalizacion');
            $table->boolean('antecedente_patologico_quirugicas');
            $table->boolean('antecedente_patologico_trumatismo');
            $table->boolean('antecedente_patologico_trasnfusion');
            $table->boolean('antecedente_patologico_consumo_de_sustancia_psicoactiva');
            $table->boolean('antecedente_patologico_alergias');
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
        Schema::dropIfExists('antecedente_patologico');
    }
};
