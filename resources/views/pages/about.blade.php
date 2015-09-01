<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
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
    <div class="content">
        <div class="title">
            <h1>About Me: {{ $first . ' ' . $last }}</h1>
            <p>Bacon ipsum dolor amet leberkas flank meatloaf pig ball tip biltong bacon hamburger strip steak pastrami. Pork porchetta ham picanha meatball pork belly. Picanha short ribs beef flank hamburger meatball pork belly. Tail capicola jerky turkey, ribeye pork chop hamburger ground round shank doner flank. Bacon pancetta meatball pork loin.</p>
        </div>
    </div>
</div>
</body>
</html>
