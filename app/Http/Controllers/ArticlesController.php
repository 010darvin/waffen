<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles',['title' => 'Articles']);
    }
}