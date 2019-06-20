<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Sponsor::class, function (Faker $faker) {
    return [

        'type',
        'sponsor_price'
    ];
});
