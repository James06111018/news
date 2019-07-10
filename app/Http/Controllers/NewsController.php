<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index() {
        $newsList = News::all();
        return view('news.index', compact('newsList'));
    }
}
