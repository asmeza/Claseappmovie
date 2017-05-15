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


use App\User;
use App\MovieType;
use App\Movie;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => str_random(10),
        'last_name' => str_random(10),
        'date_birthay' => str_random(10),
        'gender' => str_random(10),
        'biography' => str_random(10),

    ];

});


$factory->define(App\MovieType::class, function (Faker\Generator $faker) {


    return [
        'name'  => str_random(10),
    ];

});

$factory->define(App\Movie::class, function (Faker\Generator $faker) {


    return [
        'name'  => str_random(10),
        'movie_types_id' => $faker->randomElement([1, 2, 3, 4, 5]),
    ];

});
