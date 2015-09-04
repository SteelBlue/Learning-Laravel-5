<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *  Import 'Article' CLASS
 *      - able to use Article::
 *      - instead of \App\Article::
 **/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    public function index() {
        // Fetch All Articles
        $articles = Article::all();

        return view('articles.index', compact('articles'));
        // Another way to return the view
        //return view('articles.index')->with('articles', $articles);
    }

//    public function show($id) {
//        $article = Article::find($id);
//
//        return view('articles.show', compact('article'));
//    }
}
