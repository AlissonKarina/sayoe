<?php

namespace App\Http\Controllers;

use App\UnayoePerfil;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        if($request->isJson()){
            $user=UnayoePerfil::paginate(25);
            return response()->json($user, 200);
        }
        return response()->json(['error'=> 'Unauthorized'], 401,[]);
    }

    public function create(Request $request)
    {
        if($request->isJson()){
            $data = $request->json()->all();

            $alumno = Alumno::create([
                'id'=> $data['id'],  
                'codigo'=> $data['codigo'],  
                'nombre'=> $data['nombre'],  
                'apellido'=> $data['apellido'],
                'dni'=> $data['dni'], 
                'sexo'=> $data['sexo'], 
                'fecha_nacimiento'=> $data['fecha_nacimiento'], 
                'telefono'=> $data['telefono'], 
                'celular'=> $data['celular'],  
                'direccion'=> $data['direccion'], 
                'correo_personal'=> $data[ 'correo_personal'], 
                'id_usuario'=> $data['id_usuario'], 
                'id_escuela'=> $data['id_escuela'],
            ]);

            return response()->json($alumno, 201);
        }
        return response()->json(['error'=> 'Unauthorized'], 401,[]);
    }

    public function getToken(Request $request)
    {
        if($request->isJson()){
            try {
                $data = $request->json()->all();

                $alumno = Alumno::where('codigo', $data['codigo'])->first();

                dd($alumno);
                if($alumno && $ $alumno->id == $data['id']){
                    return response()->json($alumno, 200);;
                }

                else {
                    return response()->json(['error' => 'No content'], 406);
                }
            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'No content'], 406);
            }
            
        }

        return response()->json(['error'=> 'Unauthorized'], 401,[]);
    }
}
