<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosObservadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_observados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('nota');
            $table->integer('id_alumno')->unsigned();
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->string('codigo_alumno', 8);
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
        Schema::dropIfExists('cursos_observados');
    }
}
