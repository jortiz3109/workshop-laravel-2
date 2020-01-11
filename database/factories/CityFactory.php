<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\City;
use App\Entities\State;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'state_id' => factory(State::class)->create(),
    ];
});
