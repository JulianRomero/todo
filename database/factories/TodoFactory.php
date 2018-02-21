<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
    	'lista_id' => rand(1,5),
        'title' => $faker->text(50)
    ];
});
