<?php

use Illuminate\Database\Seeder;
use App\PerfilPsicologico;

class PerfilPsicologicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 5 ; $i ++){
            factory(PerfilPsicologico::class)->times(1)->create([
                'id_alumno' => $i,
                'codigo_alumno' => $i
            ]);
        }
    }
}
