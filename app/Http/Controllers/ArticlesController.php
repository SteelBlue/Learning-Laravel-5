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
    // SHOW ALL ARTICLES
    public function index()
    {
        // Fetch All Articles
        $articles = Article::all();

        return view('articles.index', compact('articles'));
        // Another way to return the view
        //return view('articles.index')->with('articles', $articles);
    }


    // SHOW SINGLE ARTICLE
    public function show($id)
    {
        /**
         *  Better Way to handle NULL
         *      - use ::findOrFail()
         *      - find the record, or fail
         **/
        $article = Article::findOrFail($id);

        /**
         *  Manual Way to handle NULL
         *      - there is a better way
         **/
//        $article = Article::find($id);
//
//        if ( is_null($article) ) :
//            // Abort and show 404 Page
//            abort(404);
//        endif;

        /**
         *  Die Dump Function
         *      - similar to var_dump
         *      - able to dive deep into the variable
         *      - stops the function from executing further
         **/
//        dd($article);

//        return $article;
        return view('articles.show', compact('article'));
    }


    // CREATE ARTICLE
    public function create()
    {
        return view('articles.create');
    }


    // STORE ARTICLE
    public function store()
    {
        return view('articles.index');
    }
}
