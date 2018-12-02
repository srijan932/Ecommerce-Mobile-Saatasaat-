<?php

use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'description'=>$faker->paragraph(6),
        'image'=>$faker->sentence,
        'price'=>$faker->number
    ];
});
