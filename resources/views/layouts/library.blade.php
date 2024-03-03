<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leonardo Abreu Personal Website">
    <meta name="author" content="Leonardo Abreu de Paulo">
    <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/library.js'])
    <title>@lang($title)</title>
  </head>

  <body class="min-h-screen grid grid-rows-1">

    <main class="bg-neutral-800 text-white row-span-1">

      @yield('main')

    </main>

  </body>

</html>
