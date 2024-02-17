<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Leonardo Abreu Personal Website">
        <meta name="author" content="Leonardo Abreu de Paulo">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Error</title>
    </head>

    <body class="h-screen flex items-center justify-center">

        <main class="flex flex-col items-center justify-center gap-6">

            @yield('error')

            <a href="{{route('home')}}" class="px-4 py-2 bg-black rounded-lg text-white text-xl hover:text-black hover:bg-white border-2 border-black">@lang('Home')</a>
        
        </main>

    </body>

</html>
