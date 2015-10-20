<!DOCTYPE html>
<html>
<head>
    <title>Ryan Ebbers - Laravel 5</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>

    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">

</head>
<body>



<div class="container">

    @include('partials.user_tab')

    @include('partials.nav')

    @include('flash::message')

    @yield('content')

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ elixir('js/all.css') }}"></script>

<script>

    $('#flash-overlay-modal').modal();

//    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>

@yield('footer')

</body>
</html>
