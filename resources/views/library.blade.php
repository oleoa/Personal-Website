@extends('layouts.simple')
@section('main')

    <div class="py-4 xl:px-margin-x-computer px-margin-x-smartphone flex flex-col gap-4">

        <h1>Library</h1>

        <h2>All simple components that are required in most projects with a simple css and js</h2>
        
        <!-- Row -->
        <div class="h-52 grid grid-cols-2 gap-4 bg-neutral-600 p-4 rounded-xl">

            <!-- Example -->
            <iframe src="https://library.leonardoabreu.com/sidebar" frameborder="0"></iframe>

            <!-- Code -->
            <div class="bg-neutral-500 p-4 rounded-xl">
                Prog
            </div>

        </div>

    </div>

@endsection
