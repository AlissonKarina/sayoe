<?php

use Illuminate\Support\Facades\Hash;
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
            'id_rol' => '1',
            'contrasenha' => Hash::make("unayoe")
        ]);

        factory(Usuario::class)->times(10)->create();
    }
}
