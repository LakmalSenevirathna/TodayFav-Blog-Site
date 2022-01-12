<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>TodayFav</title>
    </head>
    <body class="bg-gray-200">
        <div class="container mx-auto px-1 md:px-4 ">
            @include('inc.header')
            @yield('content')

            @include('inc.footer')
        </div>
    </body>
</html>