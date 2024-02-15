<nav class="hidden lg:grid grid-cols-5 justify-items-center items-center select-none text-neutral-400 h-navbar-height xl:px-margin-x-computer lg:px-margin-x-tablet w-full fixed z-40 top-0 bg-neutral-900" id="navbar">

    @foreach ($menu as $item)

        <a href="{{$item['route']}}" class="@if($item['current']) text-blue-400 @endif h-min hover:text-white hover:font-bold">@lang($item['name'])</a>

    @endforeach

</nav>
