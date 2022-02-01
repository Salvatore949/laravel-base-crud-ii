<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title'=> $faker -> word(60) -> unique(),
        'author'=> $faker -> name(),
        'release_date'=> $faker -> dateTime(),
        'pages'=> $faker ->numberBetween(0, 300) -> nullable(),
    ];
});
