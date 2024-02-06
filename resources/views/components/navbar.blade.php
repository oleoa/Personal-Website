<nav class="hidden lg:flex justify-between items-center select-none text-black dark:text-white h-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet w-full fixed z-40 top-0 bg-navbar-light dark:bg-navbar-dark" id="navbar">

    <!-- Left Part -->
    <div>
        <h2 class="">Navbar</h2>
    </div>

    <!-- Right Part -->
    <div class="flex gap-4">
        <a href="{{route('home')}}" class="@if($current == 'home') text-blue-500 @endif">Home</a>
        <a href="{{route('language', 'pt')}}">@lang('Portuguese')</a>
        <a href="{{route('language', 'en')}}">@lang('English')</a>
        <a href="{{route('switchmode')}}">SwitchMode</a>
        <a href="{{route('darkmode')}}">DarkMode</a>
        <a href="{{route('lightmode')}}">LightMode</a>
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
        <a href="{{route('logout')}}">Logout</a>
    </div>

</nav>
