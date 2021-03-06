<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body'];

    public function images()
    {
        return $this->morphMany('App\Image', 'imagable');
    }

    public function main_image()
    {
        return $this->images()->first()->filename;    
    }
}
