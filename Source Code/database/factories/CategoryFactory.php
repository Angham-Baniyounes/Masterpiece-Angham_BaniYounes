<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //category_name category_image category_description
        'category_name' => $faker->name,
        'category_image' => 'default_img.png',
        'category_description' => $faker->paragraph()
    ];
});
