<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'unit_price' => $faker->randomFloat(3, 0, 999999),
        'msrp' => $faker->randomFloat(3),
        'size' => $faker->randomElement(['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL']),
        'color' => $faker->safeColorName,
        'picture' => $faker->imageUrl,
        'category_id' => Category::get('id')->random()
    ];
});
