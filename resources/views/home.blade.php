@extends('layouts.main')
@php
  $title = 'title.home';
  $hasMargin = false;
  $current = 'home';
@endphp
@section('main')

  <!-- Software Developer -->
  <div class="xl:h-96 grid xl:grid-cols-2 xl:pt-0 pt-4 bg-gradient-to-r from-primary-200 to-primary-100 backdrop-blur-3xl xl:px-64 px-4 relative">

    <!-- Text -->
    <div class="flex flex-col items-center justify-center italic">

      <!-- Software -->
      <h1 class="xl:text-8xl text-center pr-16 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Software</h1>

      <!-- Developer -->
      <h1 class="xl:text-8xl text-center pl-16 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Developer</h1>

    </div>

    <!-- Image -->
    <img src="{{asset('/img/me.webp')}}" alt="Me" class="object-none object-top w-full h-96 pt-4">

  </div>

  <!-- What do I do? -->
  <div class="grid grid-cols-2 gap-4 xl:px-64 p-4">

    <div class="space-y-4">
      
      <h1>What Do I Do?</h1>
  
      <p class="text-start">
        I am a software developer who loves to create web applications and websites.
        I am passionate about learning new technologies and programming languages.
        I am always looking for new challenges and opportunities to grow as a developer.
      </p>

    </div>

    <img src="" alt="">

  </div>

@endsection
