<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuestionarioEvaluacion extends Model 
{
    protected $table='cuestionario_evaluaciones';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'autor',
    ];
    
    public function estadosPerfil()
    {
        return $this->hasMany('App\EstadoPerfil', 'id_cuest_eval', 'id');
    }

    public function resultados()
    {
        return $this->hasMany('App\Resultado', 'id_cuest_eval', 'id');
    }

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta', 'id_cuest_eval', 'id');
    }

}
