<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model 
{
    protected $table='roles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function usuarios()
    {
        return $this->hasMany('App\Usuario','id_rol', 'id');
    }
}
