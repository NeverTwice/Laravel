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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Product::class, function (Faker\Generator $faker) {

    $name = strtolower(str_random(10));
    return [
        'typeid' => 1,
        'siteid' =>1,
        'code' => $name,
        'label' => $name,
        'config' => '[]',
        'status' => 0,
        'mtime' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        'ctime' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        'editor' => 'ESGI',
    ];
});
