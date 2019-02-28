<?php

use Illuminate\Database\Seeder;
use App\UnayoePerfil;

class UnayoePerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UnayoePerfil::class)->times(1)->create();
    }
}
