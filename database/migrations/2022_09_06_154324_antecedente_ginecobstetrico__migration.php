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
        Schema::create('antecedente_ginecobstetrico', function (Blueprint $table){
            $table->increments('idAntecedenteGinecobstetrico');
            $table->boolean('menarquia');
            $table->boolean('papanicolau');
            $table->boolean('tamisDeMama');
            $table->boolean('gestacion');
            $table->boolean('aborto');
            $table->boolean('parto');
            $table->boolean('cesarea');
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
        Schema::dropIfExists('antecedente_ginecobstetrico');
    }
};
