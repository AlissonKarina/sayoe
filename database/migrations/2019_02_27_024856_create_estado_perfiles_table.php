<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoPerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_perfiles', function (Blueprint $table) {
            $table->integer('id_perfil_psico')->unsigned();
            $table->integer('id_cuest_eval')->unsigned();
            $table->tinyInteger('estado')->nullable();
            $table->date('fecha')->nullable();
            $table->integer('id_resultado')->unsigned();

            $table->foreign('id_perfil_psico')->references('id')->on('perfiles_psicologicos');
            $table->foreign('id_cuest_eval')->references('id')->on('cuestionario_evaluaciones');
            $table->foreign('id_resultado')->references('id')->on('resultados');

            $table->primary(['id_perfil_psico', 'id_cuest_eval']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_perfiles');
    }
}
