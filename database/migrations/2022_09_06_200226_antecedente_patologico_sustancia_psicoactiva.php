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
        Schema::create('sustancia_psicoactiva', function (Blueprint $table){
            $table->increments('idSustanciaPsicoactiva');
            $table->string('sustancia_psicoactiva_alcohol');
            $table->string('sustancia_psicoactiva_alcohol_frecuencia')->nullable();
            $table->string('sustancia_psicoactiva_alcohol_cantidad')->nullable();
            $table->string('sustancia_psicoactiva_tabaco');
            $table->string('sustancia_psicoactiva_tabaco_frecuencia')->nullable();
            $table->string('sustancia_psicoactiva_tabaco_cantidad')->nullable();
            $table->string('sustancia_psicoactiva_otra');
            $table->string('sustancia_psicoactiva_otra_tipo')->nullable();
            $table->string('sustancia_psicoactiva_otra_ultimo_consumo')->nullable();
            $table->string('sustancia_psicoactiva_otra_frecuencia')->nullable();
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
        Schema::dropIfExists('sustancia_psicoactiva');
    }
};
