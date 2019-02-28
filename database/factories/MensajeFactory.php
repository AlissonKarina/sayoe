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

$factory->define(App\Mensaje::class, function (Faker\Generator $faker) {
    return [
        'mensaje_mes' => $faker->sentence(3, false),
        'mensaje_mision' => $faker->sentence(3, false),
        'mensaje_vision' => $faker->sentence(3, false),
        'id_unayoe_perfil' => '1',
    ];
});
