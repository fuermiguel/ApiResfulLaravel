<?php

use Faker\Generator as Faker;

$factory->define(App\Pokemon::class, function (Faker $faker) {
    return [
        'name'=>$faker->name
    ];

    //*********Segenera un nombre con el modulo Faker */
});
