<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminCtrl extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function article()
    {
        $articles = Article::all();
        return view('admin.article', compact('articles'));
    }

    public function article_create(Request $request)
    {
        $article = new Article;
        $article->thumbnail = $request->thumbnail;
        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->content = $request->content;
        $article->status = $request->status;
        $article->author = $request->author;
        $article->save();
        return back();
    }

    public function article_delete($id)
    {
        $article = Article::where('id', $id)->first();
        $article->delete();
        return back();
    }
    
}
