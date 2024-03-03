@vite('resources/js/library/loader.js')
@extends('layouts.library')
@php
  $title = 'Loader'
@endphp
@section('main')

  <b href="" class="loaderActivatorLibrary p-4 inline-flex cursor-pointer">Example</b>

  <i id="loader" class="hidden text-5xl fa-solid fa-rotate animate-spin fixed top-0 right-0 items-center justify-center w-full h-full"></i>

@endsection
