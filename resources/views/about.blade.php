<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acerca de...</title>
    </head>
    <body>
        <h1>{{ $company }}</h1>

        <a href="{{ route('home') }}">Home</a>
    </body>
</html>
