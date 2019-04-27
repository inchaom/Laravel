<?php

use Faker\Generator as Faker;

$factory->define(App\PostModel::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(5),
        'description'=>$faker->text()
    ];
});
