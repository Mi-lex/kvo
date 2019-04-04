<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['description'];

    public function documents()
    {
        return $this->hasMany('App\Document', 'note_id');    
    }
}
