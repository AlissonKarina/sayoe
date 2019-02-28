<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscuelaProfesional extends Model
{

    protected $table='escuelas_profesionales';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre', 'id_facultad'
    ];

    public function facultad()
    {
        return $this->belongsTo('App\Facultad', 'id_facultad', 'id');
    }

    public function alumnos()
    {
        return $this->hasMany('App\Alumno', 'id_escuela', 'id');
    }
}
