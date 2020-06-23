<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Site;
use Faker\Generator as Faker;

$factory->define(Site::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
        'city' => $faker->city,
        'address' => $faker->streetName,
        'postal_code' => $faker->postcode,
    ];
});
