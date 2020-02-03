<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tour;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'price' => '12.2',
        'imagem' => null, // password
    ];
});
