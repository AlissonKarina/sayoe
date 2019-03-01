<?php

use Illuminate\Database\Seeder;
use App\EscuelaProfesional;

class EscuelaProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EscuelaProfesional::create([
            'nombre' => 'INGENIERÍA DE SISTEMAS',
            'id_facultad' => '1'
        ]);
        EscuelaProfesional::create([
            'nombre' => 'INGENIERÍA DE SOFTWARE',
            'id_facultad' => '1'
        ]);
    }
}
