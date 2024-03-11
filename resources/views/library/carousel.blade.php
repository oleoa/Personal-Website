@vite('resources/js/library/carousel.js')
@extends('layouts.library')
@section('main')
@php
  $title = 'Carousel';
  $slides = 5;
@endphp

  <!-- Carousel Section -->
  <div class="relative z-10 w-full overflow-x-hidden">

    <!-- Carousel Slide -->
    <div id="carousel-slide-example" class="rounded grid transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
      
      <!-- Carousel Item 1 -->
      <div class="w-full flex items-center justify-center bg-blue-500 h-64">

        <h1>Item 1</h1>

      </div>
      
      <!-- Carousel Item 2 -->
      <div class="w-full flex items-center justify-center bg-blue-500 h-64">

        <h1>Item 2</h1>

      </div>
      
      <!-- Carousel Item 3 -->
      <div class="w-full flex items-center justify-center bg-blue-500 h-64">

        <h1>Item 3</h1>

      </div>
      
      <!-- Carousel Item 4 -->
      <div class="w-full flex items-center justify-center bg-blue-500 h-64">

        <h1>Item 4</h1>

      </div>
      
      <!-- Carousel Item 5 -->
      <div class="w-full flex items-center justify-center bg-blue-500 h-64">

        <h1>Item 5</h1>

      </div>

    </div>

    <!-- Carousel Buttons -->
    <div class="absolute top-0 w-full h-full hidden justify-between xl:items-center items-end xl:z-auto z-50" id="carousel-buttons-div-example">
          
      <!-- Previous Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-example">
        <i class="fas fa-arrow-left p-4 xl:h-auto bg-black h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
      
      <!-- Next Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-example">
        <i class="fas fa-arrow-right p-4 xl:h-auto bg-black h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
  
    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-example">
    
      <input type="hidden" id="carousel-selected-indicator-color-example" value="bg-white">
      <input type="hidden" id="carousel-default-indicator-color-example" value="bg-black">
    
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-example"></div>

      @endfor

    </div>
      
  </div>

@endsection
