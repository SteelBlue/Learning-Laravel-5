@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

    <hr style="width:50%;">

        <article>

            {{ $article->body }}

        </article>

@stop