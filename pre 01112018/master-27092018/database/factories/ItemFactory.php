<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'author' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->slug,
        'active' => 1
    ];
});
