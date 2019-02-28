<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model 
{
    protected $table='resultados';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'valor', 'id_cuest_eval',
    ];

    public function cuestionarioEvaluaion()
    {
        return $this->belongsTo('App\CuestionarioEvaluacion', 'id_cuest_eval', 'id');
    }

    public function estado_perfiles()
    {
        return $this->hasMany('App\EstadoPerfil', 'id_resultado', 'id');
    }

}
