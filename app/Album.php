<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'description'];

    public function images()
    {
        return $this->morphMany('App\Image', 'imagable');
    }

    public function main_image()
    {
        return $this->images()->first()->filename;
    }
}
