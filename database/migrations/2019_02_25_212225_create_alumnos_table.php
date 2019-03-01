<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('codigo',8)->unique();
            $table->string('nombre',45);
            $table->string('apellido',45)->nullable();
            $table->string('dni',8)->unique();
            $table->tinyInteger('sexo');
            $table->date('fecha_nacimiento');
            $table->string('telefono',10)->nullable();
            $table->string('celular',10)->nullable();
            $table->string('direccion',80);
            $table->string('correo_personal',60)->unique()->nullable();

            $table->primary(['id', 'codigo']);
        
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_escuela')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_escuela')->references('id')->on('escuelas_profesionales');
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
