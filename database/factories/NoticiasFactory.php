<?php

use Faker\Generator as Faker;

$factory->define(App\Noticias::class, function (Faker $faker) {
    return [
        'tt_principal' => $faker->sentence(4),
        'tt_auxiliar' => $faker->sentence(10),
        'corpo' => $faker->text(100),
        'id_adm' => function(){
    		$count = App\Usuarios::get()->count();
    		return App\Usuarios::find(rand(1,$count));
    	},
    ];
});  

//$result = Modelname::where('id' ,'>' ,0)->get('id');
//
//len(toArray($result))