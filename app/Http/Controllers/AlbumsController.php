<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function create()
    {
        return view('pages.create-album');    
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }
}
