@extends('app')

@section('content')

    <a href="/" style="font-weight:bold;">Home</a>

    <h1>Articles</h1>

    <a href="{{ action('ArticlesController@create') }}">Create New Article</a>

    <hr style="width:50%;">

    @foreach ($articles as $article)

        <article>

            <h2>

                {{--
                    Use the action() helper method to display links
                        - pass the controller, then any parameters needed by that controller
                --}}
                {{--<a href="{{ action('ArticlesController@show', [$article->id])  }}">{{ $article->title }}</a>--}}

                {{--
                    Use the url() function
                        - pass the extension, then any additional segements
                --}}
                <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>

            </h2>

            <div class="body">
                {{ $article->body }}
            </div>

            <a href="{{ action('ArticlesController@edit', $article->id) }}">Edit</a>

        </article>

        <hr style="width:25%;">

    @endforeach

@stop