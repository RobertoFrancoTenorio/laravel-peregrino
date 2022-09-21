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
            $table->string('menarquia');
            $table->string('papanicolau');
            $table->string('tamisDeMama');
            $table->string('gestacion');
            $table->string('aborto');
            $table->string('parto');
            $table->string('cesarea');
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
