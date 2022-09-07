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
        Schema::create('hospitalizacion', function (Blueprint $table){
            $table->increments('idHospitalizacion');
            $table->string('hospitalizacion_causa');
            $table->string('hospitalizacion_fecha');
            $table->string('hospitalizacion_secuela');
            $table->integer('idAntecedentePatologico')->unsigned();
            $table->timestamps();

            $table->foreign('idAntecedentePatologico')->references('idAntecedentePatologico')->on('antecedente_patologico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('hospitalizacion');

    }
};
