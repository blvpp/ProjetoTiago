<?php

use Faker\Generator as Faker;

$factory->define(App\Usuarios::class, function (Faker $faker) {
        
    $tipo = [
	'administrador', 
	'usuario'
	];

    return [
    	'name' => $faker->name,
        'tipo' => $tipo[rand(0,1)],
        'email' => $faker->unique()->safeEmail,
        'login' => $faker->text(8),
        'senha' => $faker->text(8),
    ]; 

});
