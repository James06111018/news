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
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    function postEdit(Request $request, $id) {
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->context;
        $news->startDatetime = $request->start;
        $news->expiredDatetime = $request->expired;
        $news->save();
        return redirect('/home/index');
    }

    function delete($id) {
        return 'delete['.$id.']';
    }
}
