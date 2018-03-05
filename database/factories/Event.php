<?php

use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        //'id' => $faker->unique->randomNumber(3),
        'name' => $faker->word(),
        'date' => $faker->date(),
        'place' => $faker->word(),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true), // secret
    ];
});

