<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        return view('pages.news');
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
