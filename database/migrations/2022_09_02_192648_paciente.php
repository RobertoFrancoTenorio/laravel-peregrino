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
        Schema::create('paciente', function (Blueprint $table){
            $table->increments('idPaciente');
            $table->string('pac_Nombres');
            $table->string('pac_Primer_Apellido');
            $table->string('pac_Segundo_Apellido');
            $table->string('pac_Nombre_Completo');
            $table->string('pac_CURP')->nullable();
            $table->date('pac_f_nacimiento')->nullable();
            $table->string('pac_tipo')->nullable();
            $table->string('pac_Email')->nullable();
            $table->string('pac_Telefono')->nullable();
            $table->string('pac_Celular')->nullable();
            $table->string('pac_Estado_Civil')->nullable();
            $table->string('pac_Escolaridad')->nullable();
            $table->string('pac_Pais')->nullable();
            $table->string('pac_Sexo')->nullable();
            $table->string('pac_Estado')->nullable();
            $table->string('pac_Municipio')->nullable();
            $table->string('pac_Localidad')->nullable();
            $table->string('pac_dir_CP')->nullable();
            $table->string('pac_dir_calle')->nullable();
            $table->string('pac_dir_colonia')->nullable();
            $table->string('pac_dir_comentarios')->nullable();
            $table->integer('id_titular')->nullable()->unsigned();
            $table->string('Parentezco')->nullable();
            $table->string('user_reg')->nullable();
            $table->boolean('activo')->nullable();
            $table->string('empresa')->nullable();
            $table->foreign('id_titular')->references('idPaciente')->on('paciente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
};
