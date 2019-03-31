<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
