<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leonardo Abreu Personal Website">
    <meta name="author" content="Leonardo Abreu de Paulo">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

    <!-- Css and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Title -->
    <title>@lang($title)</title>

  </head>

  <body class="min-h-screen grid grid-rows-1 bg-neutral-800 text-white alice-regular">

    <x-loader/>

    <x-sidebar :menu="$menu" :current="$current"/>
    
    <x-navbar :menu="$menu" :current="$current"/>

    <main class="pt-20 xl:px-64 px-4 row-span-1">

      @yield('main')

    </main>

  </body>

</html>
