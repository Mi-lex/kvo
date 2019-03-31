<?php

use App\News;
use App\Image;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(News::class, 10)->create()->each(function ($news) {
            $news->images()->saveMany(factory(Image::class, 4)->make());
        });;
    }
}
