<?php

use App\Album;
use App\Image;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Faker\Generator as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(Album::class, 10)->create()->each(function ($album) use ($faker) {
            $album->images()->saveMany(factory(Image::class, 5)->make());
        });
    }
}
