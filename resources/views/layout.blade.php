<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <style>
        .is_completed {
            text-decoration: line-through;
        }

    </style>

    <title>@yield('title')</title>
</head>
<body>
    <ul>

    <li><a href="/">Home </a> </li>
    <li><a href="/about">About </a> us </li>
    <li><a href="/contact">Contact </a> us to learn more.</li>

    </ul>

    @yield('content')


</body>
</html>
