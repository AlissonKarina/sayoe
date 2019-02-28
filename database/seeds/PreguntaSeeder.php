<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            factory(Pregunta::class)->times(5)->create([
                'id_cuest_eval' => $i, 
            ]); 
        }
    }
}
