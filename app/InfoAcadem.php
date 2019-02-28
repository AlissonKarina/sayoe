<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoAcadem extends Model 
{
    protected $table='info_academ';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ciclo', 'situacion', 'promedio', 'anho_ingreso', 'estado_permanencia',
        'total_creditos', 'id_alumno', 'codigo_alumno'
    ];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'codigo_alumno', 'codigo');
    }

}
