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
        Schema::create('menstruacion', function (Blueprint $table){
            $table->increments('idMenstruacion');
            $table->string('menstruacion_frecuencia');
            $table->string('menstruacion_cantidad');
            $table->string('menstruacion_duracion');
            $table->string('menstruacion_presencia_De_Dolor');
            $table->date('menstruacion_fecha_Ultima_Menstruacion');
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
        Schema::dropIfExists('menstruacion');
    }
};
