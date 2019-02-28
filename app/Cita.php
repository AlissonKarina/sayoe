<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model 
{
    protected $table='citas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'asunto', 'fecha', 'descripcion', 'estado', 'id_alumno',
        'codigo_alumno', 'id_unayoe_perfil',
    ];

    public function unayoePerfil()
    {
        return $this->belongsTo('App\UnayoePerfil', 'id_unayoe_perfil', 'id');
    }

    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'codigo_alumno', 'codigo');
    }

}
