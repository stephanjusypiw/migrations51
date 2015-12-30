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

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//         'password' => bcrypt(str_random(10)),
//         'remember_token' => str_random(10),
//     ];
// });

/**
 *
 * Define faker for the students table
 */
$factory->define(App\Student::class, function ($faker) {
    return [
        'school_id' => $faker->numberBetween(1, 5), // since we have 5 schools
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
    ];
});
