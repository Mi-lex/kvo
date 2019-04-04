<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['filename', 'original_name'];

    public function path()
    {
        return public_path('documents')."\\$this->filename";
    }
}
