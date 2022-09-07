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
        Schema::create('alergia', function (Blueprint $table){
            $table->increments('idAlergia');
            $table->string('alergia_tipo');
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
        //
    }
};
