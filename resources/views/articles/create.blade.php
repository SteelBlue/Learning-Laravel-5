@extends('app')


@section('content')

    <h1>Write New Article</h1>

    <hr>

    {!! Form::open(['url' => 'articles']) !!}

        @include ('articles._form', ['submitButtonText'=>'Add Article'])

    {!! Form::close() !!}


    @include ('errors.list')

    <aside style="margin-top: 50px;">

        <a href="{{ action('ArticlesController@index')  }}">Back to Articles</a>

    </aside>

@stop