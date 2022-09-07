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
        Schema::create('cesarea', function (Blueprint $table){
            $table->increments('idCesarea');
            $table->integer('cesarea_cantidad');
            $table->date('cesarea_ultima_fecha');
            $table->text('cesarea_observacion');
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
        Schema::dropIfExists('cesarea');
    }
};
