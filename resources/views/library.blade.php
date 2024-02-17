@extends('layouts.simple')
@section('main')

    <div class="py-4 xl:px-margin-x-computer px-margin-x-smartphone">

        <h1>Library</h1>

        <h2>All simple components that are required in most projects with a simple css and js</h2>
        
        <div class="bg-blue-900 h-52">

            <div class="ml-44 relative">

                <button id="openSidebar">Open Sidebar Button</button>
                <aside id="sidebar" class="bg-neutral-900
                    h-full w-44 absolute top-0 left-0
                    transition-transform duration-300
                    transform -translate-x-full p-4">
                    <ul>
                        <li>Home</li>
                        <li>About US</li>
                        <li>Contact Us</li>
                    </ul>
                </aside>

            </div>

        </div>

    </div>

@endsection
