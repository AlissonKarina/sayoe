<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{

    protected $table='facultades';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
    ];

    public function escuelasProfesionales()
    {
        return $this->hasMany('App\EscuelaProfesional', 'id_facultad', 'id');
    }

    public function unayoePerfil()
    {
        return $this->hasOne('App\UnayoePerfil', 'id_facultad', 'id');
    }
}
