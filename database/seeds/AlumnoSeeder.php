<?php

use Illuminate\Database\Seeder;
use App\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1 ; $i <= 20 ; $i ++){
            factory(Alumno::class)->times(1)->create([
                'id' => $i,
                'codigo' => $i
            ]);
        }
    }
}
