<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetail;
use App\Product;
use App\Order;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'product_id' => Product::get('id')->random(),
        'order_id' => Order::get('id')->random(),
        'price' => $faker->randomFloat(3, 0, 999999),
        'quantity' => $faker->randomDigit,
    ];
});
