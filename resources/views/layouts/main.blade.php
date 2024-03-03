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

  <body class="h-full bg-secondary text-white alice-regular">

    <!-- Loader -->
    <div class="fixed top-0 left-0 w-full h-full hidden items-center justify-center z-50" id="loader">

      <!-- Spinner Background -->
      <div class="p-4 bg-gradient-to-r from-primary-100 to-primary-200 rounded-full animate-spin">

        <!-- Spinner Icon -->
        <i class="fa-solid fa-rotate text-5xl p-4 rounded-md"></i>

      </div>

    </div>

    <!-- Fork -->
    <i id="openSidebar" class="fa-solid fa-bars cursor-pointer p-4 left-0 top-0 fixed xl:hidden"></i>

    <!-- Sidebar -->
    <aside class="xl:hidden h-full w-36 fixed bg-neutral-700 top-0 left-0 transition-transform duration-300 transform -translate-x-full flex flex-col z-40" id="sidebar">

      <!-- Items -->
      <x-bar-items :current="$current"/>

    </aside>

    <!-- Overlay -->
    <div id="overlay" class="xl:hidden h-full w-full fixed top-0 left-0 z-30 transition-transform duration-300 transform -translate-x-full"></div>
    
    <!-- Navbar -->
    <nav class="hidden xl:grid grid-cols-5 justify-items-center items-center select-none text-neutral-400 h-20 xl:px-64 w-full fixed z-40 top-0 bg-neutral-900" id="navbar">
      
      <!-- Items -->
      <x-bar-items :current="$current"/>
    
    </nav>

    <main
      @class([
        'xl:pt-20 pt-12',
        'xl:px-64' => $hasMargin,
        'px-4' => $hasMargin
      ])>

      @yield('main')

    </main>

  </body>

</html>
