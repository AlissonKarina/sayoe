<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnayoePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unayoe_perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('apellido_parteno', 45);
            $table->string('apellido_materno', 45)->nullable();
            $table->string('profesion', 45)->nullable();
            $table->string('celular', 10)->nullable();
            $table->string('foto', 80)->nullable();
            $table->string('auto_descripcion', 180)->nullable();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_facultad')->unsigned()->nullable();

            $table->foreign('id_usuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('unayoe_perfiles');
    }
}
