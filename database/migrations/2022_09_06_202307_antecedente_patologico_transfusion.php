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
        Schema::create('transfusion', function (Blueprint $table){
            $table->increments('idTransfusion');
            $table->string('transfusion_causa');
            $table->string('transfusion_fecha');
            $table->string('transfusion_secuela');
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
        Schema::dropIfExists('transfusion');
    }
};
