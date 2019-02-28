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

$factory->define(App\Alumno::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
        'codigo' => $faker->randomNumber($nbDigits = 6),
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'dni' => $faker->randomNumber($nbDigits = 6),
        'sexo' => '1',
        'fecha_nacimiento' => $faker->date(),
        'telefono' => $faker->randomNumber($nbDigits = 7),
        'celular' => $faker->randomNumber($nbDigits = 9),
        'direccion' => $faker->sentence(3, false),
        'correo_personal' => $faker->unique()->safeEmail,
        'id_usuario' => '1',
        'id_escuela' => '1',
    ];
});
