<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    /**
     * Show all articles.
     *
     * @return Response
     **/
    public function index()
    {
        /**
         * Fetch ALL Articles in DESC Order, using Query Scope
         **/
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }


    /**
     * Show a single article
     *
     * @param integer $id
     * @return Response
     **/
    public function show($id)
    {
        /**
         *  Get article by id.
         **/
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }


    /**
     * Show the page to create a new article
     *
     * @return Reponse
     **/
    public function create()
    {
        return view('articles.create');
    }


    /**
     * Save a new article
     *
     * @param CreateArticleRequest $request
     * @return Response
     **/
    public function store(ArticleRequest $request)
    {
        /**
         *  Create Article using Validation
         **/
        Article::create( $request->all() );

        return redirect('articles');
    }


    /**
     * Edit an Article
     *
     * @param $id
     * @return Reponse
     **/
    public function edit( $id )
    {
        $article = Article::findOrFail( $id );

        return view('articles.edit', compact( 'article' ));
    }


    /**
     * Update an Article
     *
     * @param $id, ArticleRequest $request
     * @return Response
     **/
    public function update( $id, ArticleRequest $request )
    {
        $article = Article::findOrFail( $id );

        $article->update( $request->all() );

        return redirect('articles');
    }
}
