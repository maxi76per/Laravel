<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->realText(rand(20, 30));
    return [
        'category_id' => rand(1, 4),
        'brand_id' => rand(1, 4),
        'name' => $name,
        'content' => $faker->realText(rand(200, 400)),
        'slug' => Str::slug($name),
        'price' => rand(100, 5000),
    ];
});