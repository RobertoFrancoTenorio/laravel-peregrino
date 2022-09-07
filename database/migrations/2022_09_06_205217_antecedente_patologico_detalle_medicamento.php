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
        Schema::create('detalle_medicamento', function (Blueprint $table){
            $table->increments('idDetalleMedicamento');
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

        Schema::dropIfExists('detalle_medicamento');

    }
};
