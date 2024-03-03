@extends('layouts.main')
@php $hasMargin = true; @endphp
@section('main')

  <div class="grid xl:grid-cols-5 py-4 xl:gap-12 gap-4">

    <div class="xl:col-span-3 flex flex-col gap-4">

      @if(session('info'))
        <h1 class="xl:text-8xl text-5xl text-green-400">
          {{session('info')}}
        </h1>
      @else
        <h1 class="xl:text-8xl text-5xl">
          Contact Me
        </h1>
      @endif
      @if(session('message'))
        <p class="text-green-400">
          {{session('message')}}
        </p>
      @else
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      @endif
          
      <!-- Social Media 1 -->
      <div class="xl:flex gap-4 [&>a>svg]:w-12 hidden">
        <a target="_blank" href="https://www.instagram.com/o.leo.a/" class="hover:text-white">
          <i class="fa-brands fa-instagram text-5xl"></i>
        </a>
        <a target="_blank" href="https://github.com/oleoa" class="hover:text-white">
          <i class="fa-brands fa-github text-5xl"></i>
        </a>
        <a target="_blank" href="mailto:leonardo.abreu.de.paulo@gmail.com" class="hover:text-white">
          <i class="fa-regular fa-envelope text-5xl"></i>
        </a>
      </div>

    </div>

    <!-- Contact Form -->
    <form action="{{route('contact')}}" method="POST" class="xl:col-span-2 grid p-4 rounded bg-gradient-to-r from-blue-900 to-blue-500 gap-4 w-full">
      @csrf
      <input type="text" name="name" class="px-4 py-2 rounded bg-neutral-700" placeholder="Name">
      <input type="email" name="email" class="px-4 py-2 rounded bg-neutral-700" placeholder="Email">
      <textarea name="message" id="" cols="30" rows="5" class="px-4 py-2 rounded bg-neutral-700"></textarea>
      <input type="submit" value="Send" class="bg-neutral-700 px-4 py-2 rounded hover:bg-neutral-600 hover:cursor-pointer loaderActivator">
    </form>

    <!-- Social Media 2 -->
    <div class="grid grid-cols-3 justify-items-center gap-4 [&>a>svg]:w-12 xl:hidden">
      <a target="_blank" href="https://www.instagram.com/o.leo.a/" class="hover:text-white">
        <i class="fa-brands fa-instagram text-5xl"></i>
      </a>
      <a target="_blank" href="https://github.com/oleoa" class="hover:text-white">
        <i class="fa-brands fa-github text-5xl"></i>
      </a>
      <a target="_blank" href="mailto:leonardo.abreu.de.paulo@gmail.com" class="hover:text-white">
        <i class="fa-regular fa-envelope text-5xl"></i>
      </a>
    </div>

  </div>

@endsection
