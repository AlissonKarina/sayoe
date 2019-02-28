<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rol::class)->times(1)->create([
            'nombre' => 'Unayoe'
        ]); 

        factory(Rol::class)->times(1)->create([
            'nombre' => 'Estudiante'
        ]); 
    }
}
