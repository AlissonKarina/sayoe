<?php

use Illuminate\Database\Seeder;
use App\CursoObservado;

class CursoObservadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 20 ; $i ++){
            factory(CursoObservado::class)->times(2)->create([
                'id_alumno' => $i,
                'codigo_alumno' => $i
            ]);
        }
    }
}
