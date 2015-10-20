<?php

namespace App\Http\Controllers;


/**
 *  Import 'Article' CLASS
 *      - able to use Article::
 *      - instead of \App\Article::
 **/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//use Request;


class ArticlesController extends Controller
{

    /**
     * Constructor
     **/
    public function __construct()
    {
        // Trigger Authenticate Middleware
        /**
         * Apply Auth Middleware to all routes/methods
         **/
//        $this->middleware('auth');

        /**
         * Apply Auth Middleware to ONLY create()
         **/
//        $this->middleware('auth', ['only'=>'create']);

        /**
         * Apply Auth Middleware to all routes/methods EXCEPT index()
         **/
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show all articles.
     *
     * @return Response
     **/
    public function index()
    {
        /**
         * Fetch All Articles

//        $articles = Article::all();
         **/

         /**
          * Fetch ALL Articles in DESC Order

//        $articles = Article::latest('published_at')->get();
          **/

        /**
         * Fetch ALL Articles in DESC Order, where published-at <= Carbon::now()
         * This way can be messy, create a query scope for the where clause

//        $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
         **/

        /**
         * Another way to return the view

//        return view('articles.index')->with('articles', $articles);
         **/

        /**
         * Get Current User

//        return \Auth::user();
         **/

        /**
         * Fetch ALL Articles in DESC Order, using Query Scope
         **/
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }


    /**
     * Show a single article
     *
     * @param Article $article
     * @return Response
     **/
    public function show( Article $article )
    {
        /**
         *  Manual Way to handle NULL
         *      - there is a better way

//        $article = Article::find($id);
//
//        if ( is_null($article) ) :
//            // Abort and show 404 Page
//            abort(404);
//        endif;
         **/

        /**
         *  Better Way to handle NULL
         *      - use ::findOrFail()
         *      - find the record, or fail
         *  Used this method when $id was passed through

//        $article = Article::findOrFail($id);
         **/

        /**
         *  Die Dump Function
         *      - similar to var_dump
         *      - able to dive deep into the variable
         *      - stops the function from executing further

//        dd($article);
         **/

        /**
         *  Carbon has some great features
         *      - created_at has a method called diffForHumans()
         *          - makes it readable for humans
         *          - ex: "2 hours ago"

//        dd($article->created_at->diffForHumans());
//        dd($article->published_at);
         **/

        return view('articles.show', compact('article'));
    }


    /**
     * Show the page to create a new article
     *
     * @return Reponse
     **/
    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }


    /**
     * Save a new article
     *
     * @param CreateArticleRequest $request
     * @return Response
     **/
    public function store(ArticleRequest $request)
    {

//        dd($request->input('tags'));

        /**
         * Validation - FORMALLY - NEW STYLE USED NOW
         * Done with (CreateArticleRequest $request)
         *
         * Performed before the body of this function is run
         * MUST pass validation, BEFORE running function's body
         **/

        /**
         * Validation - Another way to validate
         *
         * Call validation directly on the Controller
         * Pass the Request
         * Pass the Validation Rules

//        $this->validate( $request, ['title'=>'required', 'body'=>'required'] );
         **/

        /**
         *  Simplest Way - to get POST Data
         *      - using a fascade

//        $input = Request::all();
//        $input['published_at'] = Carbon::now();
//
//        Article::create($input);
         **/

        /**
         *  Create Article using inline Request

//        Article::create( Request::all() );
         **/

        /**
         *  Create Article using Validation

//        Article::create( $request->all() );
         **/

        /**
         * Create Article, with Validation, and User ID
         *      Using the save() method

//        $article = new Article( $request->all() );
//
//        Auth::user()->articles()->save($article);
         **/

        /**
         * Create Article, with Validation, and User ID
         *      Using the create() method
         **/
        $article = Auth::user()->articles()->create( $request->all() );

        /**
         * Get Tags associated with the article.

//        $tagIds = $request->input('tags');
         **/

        /**
         * Attach TagIds to the article.

//        $article->tags->attach( $tagIds );
         **/

        /**
         * Inline attach TagIds to the article.
         **/
        $article->tags()->attach( $request->input('tag_list') );

        /**
         * Create Flash Message

//        Session::flash('flash_message', 'Your article has been created!');
         **/

        /**
         * Create Flash Message using Session Helper

//        session()->flash('flash_message', 'Your article has been created!');
//        session()->flash('flash_message_important', true);
//
//        return redirect('articles');
         **/

        /**
         * Create Article with a Flash Message

//        return redirect('articles')->with([
//            'flash_message' => 'Your article has been created!',
//            'flash_message_important' => true
//        ]);
         **/

        /**
         * Create Flash Message with function

//        flash('Your article has been created!');
         **/

        /**
         * Create Flash SUCCESS Message with function

//        flash()->success('Your article has been created!');
         **/

        /**
         * Create Flash OVERLAY Message with function
         **/
        flash()->overlay('Your article has been created!', 'Good Job');

        /**
         * Return Redirect to 'articles'
         **/
        return redirect('articles');
    }


    /**
     * Edit an Article
     *
     * @param Article $article
     * @return Reponse
     **/
    public function edit( Article $article )
    {
//        $article = Article::findOrFail( $id );

        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact( 'article', 'tags' ));
    }


    /**
     * Update an Article
     *
     * @param Article $article, ArticleRequest $request
     * @return Response
     **/
    public function update( Article $article, ArticleRequest $request )
    {
//        $article = Article::findOrFail( $id );

        /**
         * Update Article Content
         **/
        $article->update( $request->all() );

        /**
         * Sync Article Tags
         **/
        $article->tags()->sync( $request->input('tag_list') );

        return redirect('articles');
    }
}
