@extends('layouts.main')
@section('main')

  <div class="py-4">

    <!-- Blue Gradient Div -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-500 backdrop-blur-3xl rounded-3xl xl:h-80 grid xl:grid-cols-2 px-4 xl:pt-0 pt-4">

      <!-- Text -->
      <div class="flex flex-col items-center justify-center italic">

        <!-- Software -->
        <h1 class="xl:text-8xl text-center pr-12 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Software</h1>

        <!-- Engineer -->
        <h1 class="xl:text-8xl text-center pl-12 tracking-tighter" style="text-shadow: rgb(30, 58, 138) 0.75rem 0.75rem 0.75rem;">Engineer</h1>

      </div>

      <!-- Image -->
      <img src="{{asset('/img/me.webp')}}" alt="Me" class="object-none object-top w-full h-80 pt-4">

    </div>

  </div>

@endsection
