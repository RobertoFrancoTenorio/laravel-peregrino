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
        Schema::create('aborto', function (Blueprint $table){
            $table->increments('idAborto');
            $table->integer('aboto_cantidad');
            $table->date('aborto_ultima_fecha');
            $table->text('aborto_observacion');
            $table->integer('idAntecedenteGinecobstetrico')->unsigned();
            $table->timestamps();

            $table->foreign('idAntecedenteGinecobstetrico')->references('idAntecedenteGinecobstetrico')->on('antecedente_ginecobstetrico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('aborto');

    }
};
