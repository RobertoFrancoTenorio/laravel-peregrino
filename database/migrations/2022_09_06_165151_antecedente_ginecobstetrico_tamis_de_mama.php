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
        Schema::create('tamis_de_mama', function (Blueprint $table){
            $table->increments('idTamisDeMama');
            $table->date('tamis_fecha');
            $table->text('tamis_observacion');
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
        Schema::dropIfExists('tamis_de_mama');
    }
};
