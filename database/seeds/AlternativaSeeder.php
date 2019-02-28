<?php

use Illuminate\Database\Seeder;
use App\Alternativa;

class AlternativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 50 ; $i ++){
            factory(Alternativa::class)->times(2)->create([
                'id_pregunta' => $i,
            ]);
        }
    }
}
