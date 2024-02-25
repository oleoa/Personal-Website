<!-- Navbar -->
<nav class="text-white flex xl:hidden h-20 top-0 fixed w-full justify-center items-center bg-neutral-900 z-30">

  <!-- Garfo -->
  <div class="left-0 top-0 fixed flex justify-center items-center h-20 pl-4">
    <button id="openSidebar">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24"stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Logo -->
  <div class="flex justify-center items-center">
    <a href="{{route('home')}}" class="loaderActivator">
      <h1 class="text-3xl italic">Leonardo Abreu</h1>
    </a>
  </div>

</nav>

<!-- Overlay -->
<div id="overlay" class="w-full h-full fixed top-0 left-0 z-40 hidden"></div>

<!-- All Page Overflow -->
<aside id="sidebar" class="text-white h-screen fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full flex z-50 w-44 flex-col gap-4 p-4 bg-neutral-900">

  <!-- First item with the X close button -->
  <div class="flex justify-between pr-4">

    <!-- First item inside here because of the X close button -->
    <a class="@if($menu['home']['route']==$current) text-blue-400 @endif loaderActivator" href="{{route($menu['home']['route'])}}"><h5>@lang($menu['home']['title'])</h5></a>

    <button id="closeSidebar" class="text-white">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

  </div>

  <!-- Other items -->
  @foreach ($menu as $item)

    <!-- Skips the first item -->
    @if($loop->first)
      @continue
    @endif

    <a href="{{route($item['route'])}}" class="@if($item['route']==$current) text-blue-400 @endif h-min hover:text-white hover:font-bold loaderActivator">@lang($item['title'])</a>

  @endforeach

</aside>
