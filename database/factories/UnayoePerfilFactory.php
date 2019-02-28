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

$factory->define(App\UnayoePerfil::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
        'nombre' => $faker->name,
        'apellido_parteno' => $faker->name,
        'apellido_materno' => $faker->name,
        'profesion' => 'Psicologa',
        'celular' => $faker->randomNumber($nbDigits = 7),
        'foto' => $faker->sentence(2, false),
        'auto_descripcion' => $faker->sentence(3, false),
        'id_usuario' => '11',
        'id_facultad' => '1',
    ];
});
