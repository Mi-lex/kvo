<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;

class AlbumsController extends Controller
{
    private $images_path;

    public function __construct()
    {
        $this->images_path = public_path('images');
    }

    public function list()
    {
        $albums = Album::latest('id')->get();

        return view('pages.albums', compact('albums'));
    }

    public function create()
    {
        return view('pages.create-album');    
    }

    public function store(Request $request)
    {
        $album = $request->all();

        $images = $request->file('file');
 
        if (!is_array($images)) {
            $images = [$images];
        }
 
        if (!is_dir($this->images_path)) {
            mkdir($this->images_path, 0777);
        }

        $image_models = Image::convert_to_models($images);

        $album_model = Album::create([
            'title' => $album['title'],
            'description'  => $album['description']
        ]);

        $album_model->images()->saveMany($image_models);

        return response()->json(['message' => 'File successfully saved'], 200);
    }
}
