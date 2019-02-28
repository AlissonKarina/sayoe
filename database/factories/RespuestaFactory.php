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

$factory->define(App\Respuesta::class, function (Faker\Generator $faker) {
    return [
        'valor' => $faker->randomNumber($nbDigits = 2),
        'descripcion' => $faker->sentence(2, false),
        'id_pregunta' => '1',
        'id_pefil_psico' => '1',
    ];
});
