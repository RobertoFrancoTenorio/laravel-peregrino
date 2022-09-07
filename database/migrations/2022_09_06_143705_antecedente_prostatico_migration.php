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
        Schema::create('antecente_prostatico', function (Blueprint $table){
            $table->increments('idAntecedenteProstatico');
            $table->boolean('ExamenProstata');
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
        Schema::dropIfExists('antecente_prostatico');
    }
};
