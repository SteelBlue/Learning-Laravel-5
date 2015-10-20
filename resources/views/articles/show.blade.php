@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

    <hr style="width:50%;">

    <article>

        {{ $article->body }}

    </article>

    <hr>

    @unless ( $article->tags->isEmpty() )

        <aside class="tags">

            <h3>Tags</h3>

            <ul>

                @foreach ( $article->tags as $tag )

                    <li>{{ $tag->name }}</li>

                @endforeach

            </ul>

        </aside>

        <hr>

    @endunless

    <aside style="margin-top: 50px;">

        <h4>
            <a href="{{ action('ArticlesController@edit', $article->id) }}">Edit this Article</a>
        </h4>

        <a href="{{ action('ArticlesController@index')  }}">Back to Articles</a>

    </aside>

@stop