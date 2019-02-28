<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model 
{
    protected $table='alternativas';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'id_pregunta',
    ];

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta', 'id_pregunta', 'id');
    }

}
