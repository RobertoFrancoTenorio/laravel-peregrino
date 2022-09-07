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
        Schema::create('medicamento', function (Blueprint $table){
            $table->increments('idMedicamento');
            $table->string('medicamento_nombre');
            $table->string('medicamento_frecuencia_consumo');
            $table->date('medicamento_inicio_de_consumo');
            $table->integer('idDetalleMedicamento')->unsigned();
            $table->timestamps();

            $table->foreign('idDetalleMedicamento')->references('idDetalleMedicamento')->on('detalle_medicamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamento');
    }
};
