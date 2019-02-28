<?php

use Illuminate\Database\Seeder;
use App\Cita;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 20 ; $i ++){
            factory(Cita::class)->times(2)->create([
                'id_alumno' => $i,
                'codigo_alumno' => $i,
            ]); 
        }
    }
}
