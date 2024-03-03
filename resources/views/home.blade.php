@extends('layouts.main')
@php
  $title = 'home.title';
  $hasMargin = true;
  $current = 'home';
@endphp
@section('main')

  <div class="py-4 space-y-4">

    <!-- Blue Gradient Div -->
    <div class="bg-gradient-to-r from-primary-100 to-primary-200 backdrop-blur-3xl rounded-3xl xl:h-80 grid xl:grid-cols-2 px-4 xl:pt-0 pt-4">

      <!-- Text -->
      <div class="flex flex-col items-center justify-center italic">

        <!-- Software -->
        <h1 class="xl:text-8xl text-center pr-12 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Software</h1>

        <!-- Engineer -->
        <h1 class="xl:text-8xl text-center pl-12 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Developer</h1>

      </div>

      <!-- Image -->
      <img src="{{asset('/img/me.webp')}}" alt="Me" class="object-none object-top w-full h-80 pt-4">

    </div>

    <!-- Grid Site Resume -->
    <div class="grid xl:grid-cols-3 gap-4">

      <!-- About -->
      <div class="bg-gradient-to-r from-blue-900 to-blue-600 backdrop-blur-3xl rounded-xl p-4 col-span-2">
        <h2>About Me</h2>
        <p>Na página sobre mim </p>
      </div>

      <!-- Portfolio -->
      <div class="bg-gradient-to-r from-blue-600 to-blue-500 backdrop-blur-3xl rounded-xl p-4">
        <h2>Portfolio</h2>
        <p></p>
      </div>

      <!-- Contact -->
      <div class="bg-gradient-to-r from-blue-900 to-blue-500 backdrop-blur-3xl rounded-xl p-4">
        <h2>Contact</h2>
        <p></p>
      </div>

      <!-- Library -->
      <div class="bg-gradient-to-r from-blue-600 to-blue-500 backdrop-blur-3xl rounded-xl p-4 col-span-2">
        <h2>Library</h2>
        <p></p>
      </div>

    </div>

  </div>

@endsection
