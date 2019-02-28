<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\EstadoPerfil::class, function (Faker\Generator $faker) {
    return [
        'id_perfil_psico' => '1',
        'id_cuest_eval' => '1',
        'estado' => '1',
        'fecha' => $faker->date(),
        'id_resultado' => '1',
    ];
});
