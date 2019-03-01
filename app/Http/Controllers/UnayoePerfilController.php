<?php

namespace App\Http\Controllers;

use App\UnayoePerfil;
use App\Http\Resources\UnayoePerfilResource;
use Illuminate\Http\Request;

class UnayoePerfilController extends Controller
{

    public function index() {
        return UnayoePerfilResource::collection(UnayoePerfil::paginate(25));
    }

    public function create(Request $request) {
       $perfil = new UnayoePerfil;
       $perfil->nombre = $request->nombre;
       $perfil->apellido_parteno = $request->apellido_parteno;
       $perfil->apellido_materno = $request->apellido_materno;
       $perfil->profesion = $request->profesion;
       $perfil->celular = $request->celular;
       $perfil->foto = $request->foto;
       $perfil->auto_descripcion = $request->auto_descripcion;
       $perfil->id_usuario = $request->id_usuario;
       $perfil->id_facultad = $request->id_facultad;
       
       $perfil->save();
       return response()->json($perfil);
    }

    public function show($id)
    {
        return new UnayoePerfilResource(UnayoePerfil::find($id));
    }

    public function update(Request $request, $id)
    { 
        $perfil = UnayoePerfil::find($id);
        
        $perfil->nombre = $request->input('nombre');
       $perfil->apellido_parteno = $request->input('apellido_parteno');
       $perfil->apellido_materno = $request->unput('apellido_materno');
       $perfil->profesion = $request->input('profesion');
       $perfil->celular = $request->input('celular');
       $perfil->foto = $request->input('foto');
       $perfil->auto_descripcion = $request->input('auto_descripcion');

       $perfil->save();
       return response()->json($perfil);
    }

    public function destroy($id)
    {
       $perfil = UnayoePerfil::find($id);
       $perfil->delete();
       return response()->json('Perfil removido satisfactoriamente');
    }
}