<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leonardo Abreu Personal Website">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@lang($title)</title>
  </head>

    <body class="min-h-screen grid grid-rows-1">

        <!-- Loading -->
        <x-loader/>

        <!-- Main Content -->
        <main class="bg-neutral-800 text-white row-span-1">

            @yield('main')

        </main>

    </body>

</html>
