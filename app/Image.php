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
   
    static function get_valid_image(object $imageFile) : array
    {
        $name = sha1(date('YmdHis') . str_random(30));
        $filename = $name . '.' . $imageFile->getClientOriginalExtension();
        $resize_name = $name . '.small.' . $imageFile->getClientOriginalExtension();

        ImageInterventor::make($imageFile)
            ->resize(250, null, function ($constraints) {
                $constraints->aspectRatio();
            })
            ->save(public_path('images') . '/' . $resize_name);

        $imageFile->move(public_path('images'), $filename);

        return [
            'filename'      => $filename,
            'resized_name'  => $resize_name,
            'original_name' => basename($imageFile->getClientOriginalName())
        ];
    }

    static function convert_to_models(array $images) : array
    {
        $image_models = [];

        foreach ($images as $image) {
            $image_models[] = new Image($self::get_valid_image($image));
        }

        return $image_models;
    }
}
