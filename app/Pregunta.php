<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model 
{
    protected $table='preguntas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pregunta', 'id_cuest_eval', 
    ];

    public function cuestionarioEvaluacion()
    {
        return $this->belongsTo('App\CuestionarioEvaluacion', 'id_cuest_eval', 'id');
    }

    public function alternativas()
    {
        return $this->hasMany('App\Alternativa', 'id_pregunta', 'id');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Respuesta', 'id_pregunta', 'id');
    }

}
