<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas_profesionales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->integer('id_facultad')->unsigned()->nullable();
            
            $table->foreign('id_facultad')->references('id')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas_profesionales');
    }
}
