<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

/**
 *  Import 'Article' CLASS
 *      - able to use Article::
 *      - instead of \App\Article::
 **/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    // SHOW ALL ARTICLES
    public function index()
    {
        // Fetch All Articles
//        $articles = Article::all();

        // Fetch ALL Articles in DESC Order
//        $articles = Article::latest('published_at')->get();

        // Fetch ALL Articles in DESC Order, where published-at <= Carbon::now()
        // This way can be messy, create a query scope for the where clause
//        $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

        // Fetch ALL Articles in DESC Order, using Query Scope
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
        // Another way to return the view
        //return view('articles.index')->with('articles', $articles);
    }


    // SHOW SINGLE ARTICLE
    public function show($id)
    {
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
         *  Better Way to handle NULL
         *      - use ::findOrFail()
         *      - find the record, or fail
         **/
        $article = Article::findOrFail($id);

        /**
         *  Die Dump Function
         *      - similar to var_dump
         *      - able to dive deep into the variable
         *      - stops the function from executing further
         **/
//        dd($article);

        /**
         *  Carbon has some great features
         *      - created_at has a method called diffForHumans()
         *          - makes it readable for humans
         *          - ex: "2 hours ago"
         **/
//        dd($article->created_at->diffForHumans());
        dd($article->published_at);

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
        /**
         *  Simplest Way - to get POST Data
         *      - using a fascade
         **/
//        $input = Request::all();
//        $input['published_at'] = Carbon::now();
//
//        Article::create($input);

        /**
         *  Create Article using inline Request
         **/
        Article::create( Request::all() );

        return redirect('articles');
    }
}
