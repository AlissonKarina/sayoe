<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnayoePerfilResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nombre' => $this->nombre,
            'apellido_parteno' => $this->apellido_parteno,
            'apellido_materno' => $this->apellido_materno,
            'profesion' => $this->profesion,
            'celular' => $this->celular,
            'foto' => $this->foto,
            'auto_descripcion' => $this->auto_descripcion,
            'facultad' => $this->facultad,
            'usuario' => $this->usuario
        ];
    }
}