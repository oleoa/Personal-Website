@extends('layouts.main')
@section('main')

    <div class="py-4 flex flex-col gap-4">

        <h1>Library</h1>

        <h2>All simple components that are required in most projects with a simple css and js</h2>
        
        <!-- Row -->
        <div class="grid grid-cols-3 gap-4 bg-neutral-700 p-4 rounded-xl h-96">

            <!-- Example -->
            <div class="bg-neutral-500 p-4 rounded-xl w-full">
                <iframe src="{{route('sidebar')}}" frameborder="0" class="w-full h-full"></iframe>
            </div>

            <!-- Code -->
            <div class="bg-neutral-600 rounded-xl p-4 col-span-2 relative">

                <div class="w-full grid grid-cols-2 bg-neutral-600 absolute top-0 left-0 h-16 rounded-t-xl">
                    <button class="hover:bg-neutral-500 bg-neutral-500 py-4 rounded-tl-xl border-2 border-r-0" id="html">HTML</button>
                    <button class="hover:bg-neutral-500 py-4 rounded-tr-xl border-2" id="js">JS</button>
                </div>
            
                <div class="pt-16 h-full">
                    <iframe src="{{asset('/codes/sidebar-html.txt')}}" frameborder="0" class="w-full h-full" id="html-iframe"></iframe>
                    <iframe src="{{asset('/codes/sidebar-js.txt')}}" frameborder="0" class="w-full h-full hidden" id="js-iframe"></iframe>
                </div>

            </div>

        </div>

    </div>

@endsection
