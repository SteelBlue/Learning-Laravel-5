<!DOCTYPE html>
<html>
<head>
    <title>Ryan Ebbers - Laravel 5</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">

    @yield('content')

</div>

@yield('footer')

</body>
</html>
