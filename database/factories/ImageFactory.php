<?php

use Faker\Generator as Faker;
use App\Image;

$factory->define(Image::class, function (Faker $faker) {
    $picture = $faker->imageUrl(600, 600);
    $small_picture = str_replace("600", "300", $picture);
    
    return [
        'filename' => $picture,
        'resized_name' => $small_picture,
        'original_name' => 'original name'
    ];
});
