<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model 
{
    protected $table='alumnos';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'codigo', 'nombre', 'apellido', 'dni', 'sexo', 'fecha_nacimiento',
        'telefono', 'celular', 'direccion', 'correo_personal', 'id_usuario', 
        'id_escuela'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
    }

    public function escuelaProfesional()
    {
        return $this->belongsTo('App\EscuelaProfesional', 'id_escuela', 'id');
    }

    public function cursosObservados()
    {
        return $this->hasMany('App\CursoObservado', 'codigo_alumno', 'codigo');
    }

    public function infoAcadem()
    {
        return $this->hasOne('App\InfoAcadem', 'codigo_alumno', 'codigo');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita', 'codigo_alumno', 'codigo');
    }

    public function perfilesPsicologicos()
    {
        return $this->hasMany('App\PerfilPsicologico', 'codigo_alumno', 'codigo');
    }
}
