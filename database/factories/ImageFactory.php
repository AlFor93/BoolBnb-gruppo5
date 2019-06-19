<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        //
        'filename' =>$faker ->word,
        'img_file' =>$faker -> sentence(4)

    ];
});
