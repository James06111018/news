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
        return view('news.create');
    }

    function postCreate(Request $request) {
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->context;
        $news->startDatetime = $request->start;
        $news->expiredDatetime = $request->expired;
        $news->save();
        return redirect('/home/index');
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
