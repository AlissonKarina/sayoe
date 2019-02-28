<?php

use Illuminate\Database\Seeder;
use App\Resultado;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            factory(Resultado::class)->times(2)->create([
                'id_cuest_eval' => $i, 
            ]); 
        }
    }
}
