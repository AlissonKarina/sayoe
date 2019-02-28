<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class)->times(1)->create([
            'id_rol' => 1
        ]);

        factory(Usuario::class)->times(10)->create();
    }
}
