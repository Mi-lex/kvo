<?php

use App\News;
use App\Image;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Faker\Generator as Faker;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(News::class, 10)->create()->each(function ($news) use ($faker) {
            $news->images()->saveMany(factory(Image::class, 5)->make());
        });
    }
}
