<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence(),
        'url' => $faker->url(),
        'publication_date' => $faker->date($format = 'y-m-d', $max = 'now'),
        'date_last_accessed'=> $faker->date($format = 'y-m-d', $max = 'now'),
        'category' => $faker->word()
    ];
});
