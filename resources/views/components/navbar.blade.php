<nav class="hidden xl:grid grid-cols-5 justify-items-center items-center select-none text-neutral-400 h-20 xl:px-64 w-full fixed z-40 top-0 bg-neutral-900" id="navbar">

  @foreach ($menu as $item)

    <a href="{{route($item['route'])}}" class="@if($item['route']==$current) text-blue-400 @endif h-min hover:text-white hover:font-bold loaderActivator">@lang($item['title'])</a>

  @endforeach

</nav>
