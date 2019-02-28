<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPerfil extends Model 
{
    protected $table='estado_perfiles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_perfil_psico', 'id_cuest_eval', 'estado', 'fecha', 'id_resultado'
    ];

    public function cuestionarioEvaluacion()
    {
        return $this->belongsTo('App\CuestionarioEvaluacion', 'id_cuest_eval', 'id');
    }

    public function perfilPsicologico()
    {
        return $this->belongsTo('App\PerfilPsicologico', 'id_perfil_psico', 'id');
    }

    public function resultado()
    {
        return $this->belongsTo('App\Resultado', 'id_resultado', 'id');
    }

}
