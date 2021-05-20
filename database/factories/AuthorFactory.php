<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'key' => $faker->word,
        'name' => $faker->name(),
        'position' => $faker->jobTitle,
        'body' => $faker->realText($maxNbChars = 1200),
        'icon' => $faker->imageUrl(105, 105),
        'fb_link' => $faker->url,
        'instagram_link' => $faker->url,
        'twitter_link' => $faker->url,
        'email_link' => $faker->url,
        'linkedin_link' => $faker->url
    ];
});
