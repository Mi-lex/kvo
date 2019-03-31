<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    private $last_news;

    public function show(Request $request)
    {
        $page = $request->page;

        // if last_news record is empty set the value
        if (!isset($last_news)) {
            $this->last_news = News::latest('id')->first();
        }

        $last_news = $this->last_news;

        $news = News::where('id', '<', $last_news->id)->paginate(4);

        return view('home', compact('news', 'last_news', 'page'));
    }

    public function create()
    {
        return view('pages.create-new');  
    }

    public function store(Request $request)
    {
        return response($request->post());
    }
}
