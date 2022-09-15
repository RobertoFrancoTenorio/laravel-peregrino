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
        Schema::create('androgenico', function (Blueprint $table){
            $table->increments('idAndrogenico');
            $table->string('androgenico_vida_sexual_activa');
            $table->string('androgenico_inicio_vida_sexual');
            $table->string('androgenico_no_comp_sexuales');
            $table->string('androgenico_metodo_anticonceptivo');
            $table->string('androgenico_tipo_relaciones');
            $table->string('androgenico_ets');
            $table->string('androgenico_metodo_anticonceptivo_hormonal')->nullable();
            $table->string('androgenico_pac_metodo_anticonceptivo_hormonal_diu')->nullable();
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

        Schema::dropIfExists('androgenico');

    }
};
