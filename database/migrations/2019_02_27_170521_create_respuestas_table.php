<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('valor')->nullable();
            $table->string('descripcion',80)->nullable();
            $table->integer('id_pregunta')->unsigned();
            $table->integer('id_pefil_psico')->unsigned();

            $table->foreign('id_pregunta')->references('id')->on('preguntas');
            $table->foreign('id_pefil_psico')->references('id')->on('perfiles_psicologicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
