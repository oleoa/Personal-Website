<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leonardo Abreu de Paulo personal website">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@lang($title)</title>
  </head>

    <body class="min-h-screen">

      <!-- Loading -->
      <x-loader/>

      <!-- Sidebar -->
      <x-sidebar :current="$current"/>
      
      <!-- Navbar -->
      <x-navbar :current="$current"/>

      <!-- Main Content -->
      <main class="pt-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet px-margin-x-smartphone bg-neutral-800 text-white min-h-screen" id="main-content">

        @yield('main')

      </main>

    </body>

</html>
