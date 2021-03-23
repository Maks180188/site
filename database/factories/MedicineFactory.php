<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {

    return [
        'identifier' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'main_active_ingredient_identifier' => $faker->randomDigitNotNull,
        'manufacturer_identifier' => $faker->randomDigitNotNull,
        'price' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
