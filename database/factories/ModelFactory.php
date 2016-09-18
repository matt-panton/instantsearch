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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Bike::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'price' => $faker->numberBetween(500, 4000),
        'year' => $faker->year,
        'description' => $faker->realText(500),
        'manufacturer_id' => $faker->numberBetween(1, 19),
        'suspension' => $faker->randomElement(['full', 'hardtail']),
    ];
});
