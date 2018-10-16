<?php

use Faker\Generator as Faker;

$factory->define(App\Rotas::class, function (Faker $faker) {
    return [
        'id_motorista' => function(){
    		$count = App\Funcionarios::get()->count();
    		return App\Funcionarios::find(rand(1, $count));
    	},
		'id_caminhao' => function(){
			$count = App\Caminhoes::get()->count();
			return App\Caminhoes::find(rand(1, $count));
		},
		'bairro' => $faker->text(10)

    	
    ];
});
