@extends('app')


@section('content')

    <h1>Edit: {!! $article->title !!}</h1>

    <hr>

    {!! Form::model($article, [ 'method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id] ]) !!}

        @include ('articles._form', ['submitButtonText'=>'Update Article'])

    {!! Form::close() !!}


    @include ('errors.list')

    <aside style="margin-top: 50px;">

        <a href="{{ action('ArticlesController@index')  }}">Back to Articles</a>

    </aside>

@stop