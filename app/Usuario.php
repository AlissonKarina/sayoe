<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Usuario extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table='usuarios';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'correo', 'contrasenha', 'estado', 'autenticado', 'ultima_sesion', 'id_rol'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'ultima_sesion', 'contrasenha'
    ];

    public function alumno()
    {
        return $this->hasOne('App\Alumno', 'id_usuario', 'id');
    }

    public function unayoePerfil()
    {
        return $this->hasOne('App\UnayoePerfil', 'id_usuario', 'id');
    }

    public function rol()
    {
        return $this->belongsTo('App\Rol', 'id_rol', 'id');
    }
}
