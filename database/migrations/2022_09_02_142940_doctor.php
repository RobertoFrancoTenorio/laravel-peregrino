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
        Schema::create('doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_nombre');
            $table->string('doc_primer_apellido');
            $table->string('doc_segundo_apellido');
            $table->string('doc_nombre_completo');
            $table->string('doc_email');
            $table->integer('doc_cedula');
            $table->string('doc_curp')->nullable();
            $table->boolean('activo');
            $table->text('doc_especialidades')->nullable();
            $table->string('doc_estado')->nullable();
            $table->string('doc_municipio')->nullable();
            $table->string('doc_dir_colonia')->nullable();
            $table->string('doc_dir_calle')->nullable();
            $table->string('doc_dir_numero')->nullable();
            $table->string('doc_dir_cp')->nullable();
            $table->string('doc_celular_principal')->nullable();
            $table->time('doc_horario_ini')->nullable();
            $table->time('doc_horario_fin')->nullable();
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
        Schema::dropIfExists('doctor');
    }
};
