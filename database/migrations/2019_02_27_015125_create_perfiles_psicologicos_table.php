<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesPsicologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_psicologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recomendacion', 180)->nullable();
            $table->string('motivo', 45)->nullable();
            $table->date('fecha_limite')->nullable();

            $table->integer('id_alumno')->unsigned();
            $table->string('codigo_alumno', 8);

            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('codigo_alumno')->references('codigo')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles_psicologicos');
    }
}
