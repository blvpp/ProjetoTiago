<?php

use Faker\Generator as Faker;

$factory->define(App\Funcionarios::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'cnh' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
