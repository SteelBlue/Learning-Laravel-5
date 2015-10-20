@extends('app')

@section('content')

    <div class="content">

        <div class="title">
            Ryan Ebbers
        </div>
        <div class="nav">
            <a href="/about">About&nbsp;Me</a>
            <a href="/contact">Contact&nbsp;Me</a>
            <a href="/articles">Articles</a>
        </div>

        <div class="nav">
            <a href="/auth/login">Login</a>
            <a href="/auth/register">Register</a>
        </div>

        <div class="nav">
            <a href="/auth/logout">Logout</a>
        </div>
    </div>

@stop