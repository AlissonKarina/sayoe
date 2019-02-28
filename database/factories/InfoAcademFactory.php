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

$factory->define(App\InfoAcadem::class, function (Faker\Generator $faker) {
    return [
        'ciclo' => '5',
        'situacion' => $faker->sentence(2, false),
        'promedio' => '15.6',
        'anho_ingreso' => '2016',
        'estado_permanencia' => 'Activo',
        'total_creditos' => '82',
        'id_alumno' => '1',
        'codigo_alumno' => '1',
    ];
});
