<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker->unique() -> sentence($nbWords = 2, $variableNbWords = true),
      'text' => $faker -> text($maxNbChars = 300),
      'category' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'like' => $faker -> randomFloat($nbMaxDecimals = 8, $min = 2, $max = 1000),
      'dislike' => $faker -> randomFloat($nbMaxDecimals = 8, $min = 2, $max = 1000)

    ];
});
