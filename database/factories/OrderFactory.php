<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id' => Customer::get('id')->random(),
        'order_date' => $faker->date,
        'total_amount' => $faker->randomFloat(3, 0, 999999),
        'tax_rate' => $faker->randomFloat(2, 0, 30),
        'tax_amount' => $faker->randomFloat(3, 0, 999999),
    ];
});
