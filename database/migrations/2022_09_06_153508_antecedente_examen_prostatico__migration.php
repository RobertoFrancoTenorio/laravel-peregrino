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
        Schema::create('antecente_examen_prostatico', function (Blueprint $table){
            $table->increments('idAntecedenteExamenProstatico');
            $table->date('fecha_ultimo_Examen_Prostatico');
            $table->text('observaciones_ultimo_examen_prostatico');
            $table->integer('id_antecedente_prostatico')->unsigned();
            $table->timestamps();

            $table->foreign('id_antecedente_prostatico')->references('idAntecedenteProstatico')->on('antecente_prostatico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecente_examen_prostatico');
    }
};
