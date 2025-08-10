<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/c1/app.css')
        @vite('resources/js/c1/app.js')
    </head>
    <body class="container mx-auto py-10 bg-gray-800 text-gray-50">
        {{ $slot }}
    </body>
</html>
