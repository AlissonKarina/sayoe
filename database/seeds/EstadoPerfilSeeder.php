<?php

use Illuminate\Database\Seeder;
use App\EstadoPerfil;

class EstadoPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($p = 1 ; $p <= 5; $p++){
            for($e = 1 ; $e <= 10; $e++){
                factory(EstadoPerfil::class)->times(1)->create([
                    'id_perfil_psico' => $p,
                    'id_cuest_eval' => $e,
                ]); 
            }
        }
        
        
    }
}
