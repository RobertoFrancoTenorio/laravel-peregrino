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
        Schema::create ('historia_clinica', function (Blueprint $table){
            $table->increments('idHistoriaClinica');
            $table->integer('idPaciente')->nullable()->unsigned();
            $table->string('id_register')->nullable();

            $table->foreign('idPaciente')->references('idPaciente')->on('paciente');
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
        Schema::dropIfExists('historia_clinica');

    }
};
