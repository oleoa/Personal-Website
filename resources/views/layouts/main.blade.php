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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous"></script>

    <!-- Css and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Title -->
    <title>@lang($title)</title>

  </head>

  <body class="min-h-screen grid grid-rows-1 bg-neutral-800 text-white alice-regular">

    <div class="fixed top-0 left-0 w-full h-full hidden items-center justify-center z-50" id="loader">
      <div class="p-4 bg-gradient-to-r from-blue-900 to-blue-500 rounded-full animate-spin">
        <i class="fa-solid fa-rotate text-5xl p-4 rounded-md"></i>
      </div>
    </div>

    <x-sidebar :menu="$menu" :current="$current"/>
    
    <x-navbar :menu="$menu" :current="$current"/>

    <main @class([
      'pt-20',
      'xl:px-64' => $hasMargin,
      'px-4' => $hasMargin,
      'row-span-1'
    ])>

      @yield('main')

    </main>

  </body>

</html>
