<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'code' => str_pad($faker->randomLetter, 5, '0') . $faker->randomDigit,
        'name' => $faker->word,
        'price' => $faker->randomNumber(4),
    ];
});
