<nav class="hidden lg:flex justify-between items-center select-none text-white h-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet w-full fixed z-40 top-0 bg-neutral-800" id="navbar">

    <!-- Left Part -->
    <div>
        <h2 class="">Navbar</h2>
    </div>

    <!-- Right Part -->
    <div class="flex gap-4">
        <a href="{{route('home')}}" class="@if($current == 'home') text-blue-400 @endif">Home</a>
    </div>

</nav>
