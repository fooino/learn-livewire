<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite('resources/css/c1/app.css')
    @vite('resources/js/c1/app.js')
</head>

@php
    $routes = ['home' => 'Home', 'c1.admin.dashboard' => 'Dashboard', 'c1.admin.articles.archive' => 'Articles'];
@endphp

<body class="container mx-auto bg-gray-800 text-gray-50 h-screen">

    <div class="h-30 container mx-auto bg-gray-700 text-gray-50 rounded-2xl">

        <nav class="p-10">

            @foreach ($routes as $routeName => $name)
                <a @class([
                    'bg-gray-800 p-3 rounded-md m-2 hover:text-amber-500',
                    'text-amber-600' =>
                        $routeName == Illuminate\Support\Facades\Route::currentRouteName(),
                ]) wire:navigate href="{{ route($routeName) }}">{{ $name }}</a>
            @endforeach
        </nav>
    </div>


    <div class="mt-5">
        {{ $slot }}
    </div>


</body>

</html>
