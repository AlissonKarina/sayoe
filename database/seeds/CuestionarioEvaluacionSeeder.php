<?php

use Illuminate\Database\Seeder;
use App\CuestionarioEvaluacion;

class CuestionarioEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(CuestionarioEvaluacion::class)->times(10)->create();
    }
}
