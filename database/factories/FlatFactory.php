<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Flat::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'number_of_rooms' => $faker->numberBetween(1,5),
        'mq' => $faker->numberBetween(50,100),
        'address' => $faker->address
    ];
});
