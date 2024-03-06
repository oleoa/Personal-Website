@extends('layouts.main')
@php
  $title = 'title.home';
  $hasMargin = false;
  $current = 'home';
@endphp
@section('main')

  <!-- Software Developer -->
  <div class="xl:h-96 grid xl:grid-cols-2 xl:pt-0 pt-4 bg-gradient-to-r from-primary-200 to-primary-100 backdrop-blur-3xl xl:px-64 px-4 relative">

    <!-- Waves -->
    <div class="wave-navbar">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>

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
  <div class="grid grid-cols-2 gap-4 xl:px-64 p-4 spacer">

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
