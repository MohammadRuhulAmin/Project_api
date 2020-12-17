<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'detail'=>$faker->sentence(10),
        'stock'=>$faker->numberBetween(1,1000),
        'prize'=>$faker->numberBetween(1,10000),
        'discount'=>$faker->numberBetween(1,30),
        'company'=>$faker->word,
    ];
});
