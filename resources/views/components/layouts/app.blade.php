<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite('resources/css/c1/app.css')
    @vite('resources/js/c1/app.js')
</head>

<body class="container mx-auto bg-gray-800 text-gray-50 h-screen">

    <div class="flex">
        <ul class="border-1 border-amber-600 rounded p-5 mr-5 w-[240px] h-screen">

            @foreach (Illuminate\Support\Facades\Route::getRoutes() as $route)
                @if ($route->methods()[0] != 'GET' || !str($route->uri())->startsWith('c'))
                    @continue
                @endif

                @php
                    $parameters = [];

                    if (str_contains($route->uri(), '/{')) {
                        $parameters = [1];
                    }
                @endphp
                <li @class([
                    'hover:text-amber-500',
                    'text-amber-600' =>
                        Illuminate\Support\Facades\Route::currentRouteName() ==
                        $route->getName(),
                ])>
                    • <a wire:navigate href="{{ route($route->getName(), $parameters) }}">{{ $route->uri() }}</a>
                </li>
            @endforeach
        </ul>
        <div class="p-5 w-full">

            @if (Illuminate\Support\Facades\Route::currentRouteName() != 'c1.articles.search')
            <livewire:c1.article.search>
            @endif

            {{ $slot ?? '' }}
        </div>
    </div>

</body>

</html>
