<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(200,5000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30),
    ];
});
