<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image as ImageInterventor;

class Image extends Model
{
    protected $fillable = ['filename', 'resized_name', 'original_name'];

    public function imagable()
    {
        return $this->morphTo();    
    }
    
    static function convert_to_models(array $images) : array
    {
        $image_models = [];

        foreach ($images as $image) {
            $name = sha1(date('YmdHis') . str_random(30));
            $filename = $name . '.' . $image->getClientOriginalExtension();
            $resize_name = $name . '.small.' . $image->getClientOriginalExtension();
 
            ImageInterventor::make($image)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save(public_path('images') . '/' . $resize_name);
 
            $image->move(public_path('images'), $filename);

            $image_model = new Image([
                'filename'      => $filename,
                'resized_name'  => $resize_name,
                'original_name' => basename($image->getClientOriginalName())
            ]);

            $image_models[] = $image_model;
        }

        return $image_models;
    }
}
