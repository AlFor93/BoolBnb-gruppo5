<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [

      'content' =>$faker -> sentence(),
      'sender' => $faker -> safeEmail(),
      'sent_date' => $faker -> date($format = 'Y-m-d', $max = 'now')
    ];
});
