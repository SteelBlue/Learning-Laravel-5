@extends('app')

@section('content')

    <div class="content">
        <div class="title">

            <a href="/">Home</a>

            <h1>About Me: {{ $first }} {{ $last }}</h1>

            <p>Bacon ipsum dolor amet leberkas flank meatloaf pig ball tip biltong bacon hamburger strip steak pastrami. Pork porchetta ham picanha meatball pork belly. Picanha short ribs beef flank hamburger meatball pork belly. Tail capicola jerky turkey, ribeye pork chop hamburger ground round shank doner flank. Bacon pancetta meatball pork loin.</p>

            @if ( $first === 'Ryan' )
                <h2>Developus Maximus</h2>
            @endif

        </div>
    </div>

@stop