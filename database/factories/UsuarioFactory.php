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

$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    return [
        'correo' => $faker->unique()->safeEmail,
        'contrasenha' => $faker->name,
        'estado' => 1,
        'autenticado' => 1,
        'ultima_sesion' => '2012-02-03',
        'id_rol' => 2
    ];
});
