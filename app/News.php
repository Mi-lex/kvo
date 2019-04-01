<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body'];

    public function images()
    {
        return $this->hasMany('App\Image', 'news_id');
    }

    public function main_image()
    {
        return $this->images()->first()->filename;    
    }
}
