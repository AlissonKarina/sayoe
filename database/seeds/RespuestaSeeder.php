<?php

use Illuminate\Database\Seeder;
use App\Respuesta;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($p = 1 ; $p <= 3 ; $p ++){
            for($i = 1 ; $i <= 50 ; $i ++){
                factory(Respuesta::class)->times(2)->create([
                    'id_pregunta' => $i,
                    'id_pefil_psico' => $p,
                ]);
            }
        }
    }
}
