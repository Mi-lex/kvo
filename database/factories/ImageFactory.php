<?php

use Illuminate\Http\UploadedFile;
use Faker\Generator as Faker;
use App\Image;

$factory->define(Image::class, function (Faker $faker) {
    return Image::get_valid_image(UploadedFile::fake()->image($faker->word . '.jpg'));   
});
