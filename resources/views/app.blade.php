<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-family: 'Lato';
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            padding-left: 0;
        }

        ul li {
            list-style-type: none;
        }

        label {
            display: block;
            /*margin-top: 20px;*/
        }

        pre {
            text-align: left;
        }

        .container {
            text-align: center;
            /*display: table-cell;*/
            /*vertical-align: middle;*/
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 2em;
        }
    </style>

</head>
<body>

<div class="container">

    @yield('content')

</div>

@yield('footer')

</body>
</html>
