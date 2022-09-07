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
        Schema::create('parto', function (Blueprint $table){
            $table->increments('idParto');
            $table->date('parto_ultima_fecha');
            $table->integer('partos_cantidad');
            $table->text('parto_observacion');
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
        Schema::dropIfExists('parto');
    }
};
