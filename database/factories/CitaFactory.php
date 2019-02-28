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

$factory->define(App\Cita::class, function (Faker\Generator $faker) {
    return [
        'codigo' => $faker->randomNumber($nbDigits = 6),
        'asunto' => $faker->sentence(2, false),
        'fecha' => $faker->date(),
        'descripcion' => $faker->sentence(2, false),
        'estado' => '1',
        'id_alumno' => '1',
        'codigo_alumno' => '1',
        'id_unayoe_perfil' => '1',
    ];
});
