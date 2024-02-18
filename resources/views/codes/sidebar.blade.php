@extends('layouts.simple')
@section('main')

    &lt;!-- Navbar --&gt;<br>
    &lt;div class="text-white flex lg:hidden h-navbar-height top-0 fixed w-full justify-center items-center bg-neutral-900 z-50"&gt;<br>
    &emsp;<br>
    &emsp;&lt;!-- Garfo --&gt;<br>
    &emsp;&lt;div class="left-0 top-0 fixed flex justify-center items-center h-navbar-height pl-4"&gt;<br>
    &emsp;&emsp;&lt;button id="openSidebar"&gt;<br>
    &emsp;&emsp;&emsp;&lt;svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24"stroke="currentColor"&gt;<br>
    &emsp;&emsp;&emsp;&emsp;&lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /&gt;<br>
    &emsp;&emsp;&emsp;&lt;/svg&gt;<br>
    &emsp;&emsp;&lt;/button&gt;<br>
    &emsp;&lt;/div&gt;<br>
    &emsp;<br>
    &emsp;&lt;!-- Logo --&gt;<br>
    &emsp;&lt;div class="flex justify-center items-center"&gt;<br>
    &emsp;&emsp;&lt;a href="home"&gt;<br>
    &emsp;&emsp;&emsp;&lt;h1 class="text-3xl italic"&gt;Leonardo Abreu&lt;/h1&gt;<br>
    &emsp;&emsp;&lt;/a&gt;<br>
    &emsp;&lt;/div&gt;<br>
    &emsp;<br>
    &emsp;&lt;!-- Sidebar Itself --&gt;<br>
    &emsp;&lt;nav id="sidebar" class="bg-neutral-900 text-white h-screen w-44 fixed top-0 left-0 transition-transform duration-300 transform -translate-x-full p-4 text-xl flex flex-col gap-4"&gt;<br>
    &emsp;&emsp;<br>
    &emsp;&emsp;&lt;!-- First item with the X close button --&gt;<br>
    &emsp;&emsp;&lt;div class="flex justify-between pr-4"&gt;<br>
    &emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&emsp;&lt;!-- First item inside here because of the X close button --&gt;<br>
    &emsp;&emsp;&emsp;&lt;a class="loaderActivator" href="home"&gt;&lt;h5&gt;Home&lt;/h5&gt;&lt;/a&gt;<br>
    &emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&emsp;&lt;button id="closeSidebar" class="text-white"&gt;<br>
    &emsp;&emsp;&emsp;&emsp;&lt;svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"&gt;<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;<br>
    &emsp;&emsp;&emsp;&emsp;&lt;/svg&gt;<br>
    &emsp;&emsp;&emsp;&lt;/button&gt;<br>
    &emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&lt;/div&gt;<br>
    &emsp;&emsp;<br>
    &emsp;&emsp;&lt;!-- Other items --&gt;<br>
    &emsp;&emsp;<br>
    &emsp;&emsp;&lt;a href="about" class="h-min hover:text-white hover:font-bold"&gt;About Us&lt;/a&gt;<br>
    &emsp;&emsp;<br>
    &emsp;&lt;/nav&gt;<br>
    &emsp;<br>
    &lt;/div&gt;
    
@endsection
