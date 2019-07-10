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

    function create() {
        return 'create';
    }

    function edit($id) {
        return 'edit['.$id.']';
    }

    function postEdit($id) {
        return 'postEdit['.$id.']';
    }

    function delete($id) {
        return 'delete['.$id.']';
    }
}
