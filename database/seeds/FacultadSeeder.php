<?php

use Illuminate\Database\Seeder;
use App\Facultad;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Facultad::class)->times(1)->create([
            'nombre' => 'INGENIERÍA DE SISTEMAS E INFORMATICA'
        ]);
    }
}
