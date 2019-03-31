<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function show(Request $request)
    {
        $page = $request->page;

        $major_news = News::latest('id')->first();

        $news = News::where('id', '<', $major_news->id)->paginate(4);

        return view('home', compact('news', 'major_news'));
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
