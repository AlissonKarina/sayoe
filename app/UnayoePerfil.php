<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnayoePerfil extends Model
{

    protected $table='unayoe_perfiles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido_parteno', 'apellido_materno', 'profesion',
        'celular', 'foto', 'auto_descripcion', 'id_usuario', 'id_facultad'
    ];

    public function facultad()
    {
        return $this->belongsTo('App\Facultad', 'id_facultad', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
    }

    public function mensajes()
    {
        return $this->hasMany('App\Mensaje', 'id_unayoe_perfil', 'id');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita', 'id_unayoe_perfil', 'id');
    }

}
