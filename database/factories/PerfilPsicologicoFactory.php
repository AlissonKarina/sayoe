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

$factory->define(App\PerfilPsicologico::class, function (Faker\Generator $faker) {
    return [
        'recomendacion' => $faker->sentence(3, false),
        'motivo' => $faker->sentence(2, false),
        'fecha_limite' => $faker->date(),
        'id_alumno' => '1',
        'codigo_alumno' => '1',
    ];
});
