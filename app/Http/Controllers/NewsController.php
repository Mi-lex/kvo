<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Image;

class NewsController extends Controller
{
    private $last_news;
    private $images_path;
 
    public function __construct()
    {
        $this->images_path = public_path('images');
    }

    public function list(Request $request)
    {
        $page = $request->page;

        // if last_news record is empty set the value
        if (!isset($last_news)) {
            $this->last_news = News::latest('id')->first();
        }

        $last_news = $this->last_news;

        $news = $last_news ?  News::where('id', '<', $last_news->id)
            ->latest('id')->paginate(4) : 
            null;
           

        return view('home', compact('news', 'last_news', 'page'));
    }

    public function show(News $news)
    {
        return view('pages.news', compact('news'));    
    }

    public function create()
    {
        return view('pages.create-news');
    }

    public function store(Request $request)
    {
        $news = $request->all();

        $images = $request->file('file');
 
        if (!is_array($images)) {
            $images = [$images];
        }
 
        if (!is_dir($this->images_path)) {
            mkdir($this->images_path, 0777);
        }

        $image_models = Image::convert_to_models($images);

        $news_model = News::create([
            'title' => $news['title'],
            'body'  => $news['body']
        ]);

        $news_model->images()->saveMany($image_models);

        return response()->json(['message' => 'File successfully saved'], 200);
    }
}
