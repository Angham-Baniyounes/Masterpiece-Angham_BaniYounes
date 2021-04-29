<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
        'subcategory_name' => $faker->name,
        'subcategory_image' => 'default_img.png',
        'subcategory_description' => $faker->paragraph,
        'category_id' => factory(App\Category::class)
    ];
});
