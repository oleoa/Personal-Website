@extends('layouts.simple')
@section('main')

    <div class="py-4 xl:px-margin-x-computer px-margin-x-smartphone flex flex-col gap-4">

        <h1>Library</h1>

        <h2>All simple components that are required in most projects with a simple css and js</h2>
        
        <!-- Row -->
        <div class="grid grid-cols-2 gap-4 bg-neutral-600 p-4 rounded-xl h-96">

            <!-- Example -->
            <div class="bg-neutral-500 p-4 rounded-xl w-full">
                <iframe src="https://library.leonardoabreu.com/sidebar" frameborder="0" class="w-full h-full"></iframe>
            </div>

            <!-- Code -->
            <div class="bg-neutral-500 rounded-xl overflow-y-scroll">
                
                <div class="w-full grid grid-cols-2 bg-neutral-400 rounded-t-xl">
                    <button class="hover:bg-neutral-300 py-4 rounded-tl-xl">HTML</button>
                    <button class="hover:bg-neutral-300 py-4 rounded-tr-xl">JS</button>
                </div>

                <code class="">
                    @include('codes.sidebar')                    
                </code>

            </div>

        </div>

    </div>

@endsection
