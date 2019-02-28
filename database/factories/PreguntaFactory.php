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

$factory->define(App\Pregunta::class, function (Faker\Generator $faker) {
    return [
        'pregunta' => $faker->sentence(1, false),
        'id_cuest_eval' => '1',
    ];
});
