@extends('layouts.simple')
@section('main')

    <div class="flex items-center justify-center">

        <div class="relative w-80 overflow-hidden">
    
            <div class="carousel-slide flex transition-transform duration-500">
    
                <img class="w-full" src="{{asset('/img/1.svg')}}" alt="Image 1">
    
                <img class="w-full" src="{{asset('/img/2.jpg')}}" alt="Image 2">
    
                <img class="w-full" src="{{asset('/img/3.jpg')}}" alt="Image 3">
    
            </div>
            
            <div class="absolute top-0 p-4 w-full h-full flex justify-between items-center">

                <button class="bg-neutral-800 text-white px-4 py-2 cursor-pointer rounded" id="prevBtn">Previous</button>

                <button class="bg-neutral-800 text-white px-4 py-2 cursor-pointer rounded" id="nextBtn">Next</button>

            </div>
    
        </div>

    </div>

    <script>

        const carouselSlide = document.querySelector('.carousel-slide');

        const prevBtn = document.getElementById('prevBtn');

        const nextBtn = document.getElementById('nextBtn');

        let counter = 0;

        const size = carouselSlide.clientWidth;

        function slideNext() {
            if (counter >= carouselSlide.children.length - 1) return;
            counter++;
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }

        function slidePrev() {
            if (counter <= 0) return;
            counter--;
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }

        nextBtn.addEventListener('click', slideNext);

        prevBtn.addEventListener('click', slidePrev);

    </script>

@endsection
