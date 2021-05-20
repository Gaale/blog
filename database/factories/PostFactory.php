<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1, 10),
        'title' => $faker->text(100),
        'body' => $faker->realTextBetween(2500, 4000),
        'img295_250' => $faker->imageUrl(295, 250),
        'img780_520' => $faker->imageUrl(780, 520)
    ];
});
