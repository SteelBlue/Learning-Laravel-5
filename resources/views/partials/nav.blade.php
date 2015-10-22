@if ( !Request::is('/') )

    <div class="nav">

        <a href="/">Home</a>
        <a href="/about">About&nbsp;Me</a>
        <a href="/contact">Contact&nbsp;Me</a>
        <a href="/articles">Articles</a>

    </div>

    <hr>

    <div class="">

        {{-- Display Lastest Article --}}
        <h4>Latest Article</h4>

        {!! link_to_action( 'ArticlesController@show', $latest->title, [$latest->id] ) !!}

    </div>

    <hr>

@endif