@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

    <hr style="width:50%;">

    <article>

        {{ $article->body }}

    </article>

    <aside style="margin-top: 50px;">

        <a href="{{ action('ArticlesController@index')  }}">Back to Articles</a>

    </aside>

@stop