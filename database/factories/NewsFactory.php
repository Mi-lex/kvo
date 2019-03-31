<?php

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body'  => $faker->paragraph()
    ];
});
