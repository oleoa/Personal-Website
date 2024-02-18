@extends('layouts.main')
@section('main')

    <div class="grid grid-cols-2">

        <p>
            Hello, my name is Leonardo Abreu. I was born and lived in Brazil for 14 years, then I moved to Portugal, where I finished school and professionally trained as a programmer. Today, I am 18 years old and primarily work in my field. This website is a place for me to store my projects, try new things, and tell my story.
        </p>
        <img src="{{asset('/img/personal.jpg')}}" alt="">

        <img src="{{asset('/img/personal.jpg')}}" alt="">
        <p>
            In the programming field, I specialize more in front-end, but I am open to learning other areas. I have worked with frameworks like Laravel, CodeIgniter, and Next.js. I am familiar with and can use the React JavaScript library, and I often use Tailwind as a CSS library (as in this project).
        </p>

        <p>
            I go to the gym and have been training for over a year. I am natural and aim to have a better body than I do now, but without overdoing it, so I can focus on other aspects like work and relationships.
        </p>
        <img src="{{asset('/img/personal.jpg')}}" alt="">

        <img src="{{asset('/img/personal.jpg')}}" alt="">
        <p>
            I love listening to music; my favorite bands include Pink Floyd, Tame Impala, The Weeknd, Marillion, Tyler, The Creator, Kanye West, and others in these genres. I am almost always wearing headphones and listening to one of these.
        </p>

        <p>
            I love to travel and dream of one day seeing the whole world, experiencing all cultures, exploring nature, climbing, camping in remote places, and embarking on all kinds of nature-related adventures.
        </p>
        <img src="{{asset('/img/personal.jpg')}}" alt="">
        
    </div>

@endsection
