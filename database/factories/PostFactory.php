<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker->unique() -> sentence($nbWords = 2, $variableNbWords = true),
      'text' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'category' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'like' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'dislike' => $faker -> sentence($nbWords = 6, $variableNbWords = true)

    ];
});
