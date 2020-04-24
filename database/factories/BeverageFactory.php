<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Beverage;
use Faker\Generator as Faker;

$factory->define(Beverage::class, function (Faker $faker) {
    	// dd($faker);
    return [
        'name' => $faker->word,
        'type' => 'Softrink'
    ];
});
