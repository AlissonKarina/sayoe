<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model 
{
    protected $table='respuestas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor', 'descripcion', 'id_pregunta', 'id_pefil_psico',
    ];

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta', 'id_pregunta', 'id');
    }

    public function perfilPsicologico()
    {
        return $this->belongsTo('App\PerfilPsicologico', 'id_pefil_psico', 'id');
    }

}
