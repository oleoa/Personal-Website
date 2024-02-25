@extends('layouts.library')
@section('main')

    <!-- Navbar -->
    <div class="text-white flex h-navbar-height top-0 fixed w-full justify-center items-center bg-neutral-900 z-50">

        <!-- Garfo -->
        <div class="left-0 top-0 fixed flex justify-center items-center h-navbar-height pl-4">
            <button id="openSidebar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24"stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Itself -->
        <nav id="sidebar" class="bg-neutral-900 text-white h-screen w-44 fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full p-4 text-xl flex flex-col gap-4">

            <!-- First item with the X close button -->
            <div class="flex justify-between pr-4">

                <!-- First item inside here because of the X close button -->
                <a class="@if('currentRoute' == 'home') text-blue-400 @endif" href=""><h5>@lang('Home')</h5></a>

                <button id="closeSidebar" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

            </div>

            <a href="" class="@if('currentRoute' == 'about') text-blue-400 @endif h-min hover:text-white hover:font-bold">@lang('About Us')</a>

        </nav>

    </div>

@endsection
