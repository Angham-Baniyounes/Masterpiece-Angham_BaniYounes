<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name,
        'product_primary_image' => 'default_img.png',
        'product_price' => $faker->numberBetween(1, 50),
        'product_discount' => $faker->numberBetween(0.1, 0.7),
        'product_state' => '1',
        'product_description' => $faker->paragraph,
        'subcategory_id' => factory(App\Subcategory::class)
    ];
});
