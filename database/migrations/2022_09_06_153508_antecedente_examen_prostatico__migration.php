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
        Schema::create('examen_prostatico', function (Blueprint $table){
            $table->increments('idAntecedenteExamenProstatico');
            $table->date('fecha_ultimo_Examen_Prostatico');
            $table->text('observaciones_ultimo_examen_prostatico');
            $table->integer('idAntecedenteProstatico')->unsigned();
            $table->timestamps();

            $table->foreign('idAntecedenteProstatico')->references('idAntecedenteProstatico')->on('antecente_prostatico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_prostatico');
    }
};
