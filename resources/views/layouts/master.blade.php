<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Forum</title>

        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
    </body>
</html>
