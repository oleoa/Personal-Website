@vite('resources/js/library/faq.js')
@extends('layouts.library')
@php
  $title = 'FAQ'
@endphp
@section('main')

  <div class="xl:px-margin px-4 text-white flex flex-col gap-2 p-4">

    <!-- Question -->
    <div class="faq flex flex-col gap-1">

      <!-- Question -->
      <button class="w-full bg-neutral-700 p-4 rounded-lg shadow flex items-center justify-between">
        <span class="text-lg font-semibold">Question</span>
        <span class="">+</span>
      </button>

      <!-- Answer -->
      <div class="bg-neutral-500 p-4 rounded hidden">
        <p>Answer</p>
      </div>

    </div>

    <!-- Question -->
    <div class="faq flex flex-col gap-1">

      <!-- Question -->
      <button class="w-full bg-neutral-700 p-4 rounded-lg shadow flex items-center justify-between">
        <span class="text-lg font-semibold">Question</span>
        <span class="">+</span>
      </button>

      <!-- Answer -->
      <div class="bg-neutral-500 p-4 rounded hidden">
        <p>Answer</p>
      </div>

    </div>

    <!-- Question -->
    <div class="faq flex flex-col gap-1">

      <!-- Question -->
      <button class="w-full bg-neutral-700 p-4 rounded-lg shadow flex items-center justify-between">
        <span class="text-lg font-semibold">Question</span>
        <span class="">+</span>
      </button>

      <!-- Answer -->
      <div class="bg-neutral-500 p-4 rounded hidden">
        <p>Answer</p>
      </div>

    </div>

  </div>

@endsection
