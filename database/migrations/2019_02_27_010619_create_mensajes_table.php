<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mensaje_mes', 180);
            $table->string('mensaje_mision', 180);
            $table->string('mensaje_vision', 180);
            $table->integer('id_unayoe_perfil')->unsigned();

            $table->foreign('id_unayoe_perfil')->references('id')->on('unayoe_perfiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
