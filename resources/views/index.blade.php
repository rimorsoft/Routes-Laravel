<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Routes</title>
    </head>
    <body>
        <h1>Bienvenidos</h1>

        <a href="{{ route('about') }}">Acerca de...</a>
    </body>
</html>
