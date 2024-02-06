<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@if($darkmode) dark @endif">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Main Laravel Setup">
    <meta name="description" content="Main Laravel Setup">
    <meta name="author" content="Leonardo Abreu de Paulo">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@lang($title)</title>
  </head>

    <body class="min-h-screen grid grid-rows-10">

      <!-- Loading -->
      <x-loader/>

      <!-- Sidebar -->
      <x-sidebar :current="$current" :logged="$logged"/>
      
      <!-- Navbar -->
      <x-navbar :current="$current" :logged="$logged"/>

      <!-- Main Content -->
      <main class="pt-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet px-margin-x-smartphone dark:bg-zinc-900 row-span-10 text-black dark:text-white" id="main-content">

        @yield('main')

      </main>

      <!-- Footer -->
      <x-footer/>

    </body>

</html>
