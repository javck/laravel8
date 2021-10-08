<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }

    public function show()
    {
        $title = 'Panda Lab';
        $content = '<b>Hello, World!</b>';
        return view('articles.show',compact('title','content'));
    }
}
