<nav class="hidden lg:grid grid-cols-5 justify-items-center items-center select-none text-neutral-400 h-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet w-full fixed z-40 top-0 bg-neutral-900" id="navbar">

    <a href="{{route('home')}}" class="@if($current == 'home') text-blue-400 @endif h-min hover:text-white">@lang('Bar-Home')</a>
    <a href="{{route('home')}}" class="@if($current == 'about') text-blue-400 @endif h-min hover:text-white">@lang('Bar-About')</a>
    <a href="{{route('home')}}" class="@if($current == 'portfolio') text-blue-400 @endif h-min hover:text-white">@lang('Bar-Portfolio')</a>
    <a href="{{route('home')}}" class="@if($current == 'skills') text-blue-400 @endif h-min hover:text-white">@lang('Bar-Skills')</a>
    <a href="{{route('home')}}" class="@if($current == 'contact') text-blue-400 @endif h-min hover:text-white">@lang('Bar-Contact')</a>

</nav>
