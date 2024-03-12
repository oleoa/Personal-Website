@extends('layouts.main')
@php
  $title = 'title.portfolio';
  $hasMargin = true;
  $current = 'portfolio';
@endphp
@section('main')
    
  <div class="grid grid-rows-3 gap-4 py-4">

    @foreach ($projects as $p)

      @if($p['status'] == 'inactive') @continue @endif

      <div class="flex flex-col bg-neutral-700 rounded-xl p-4 gap-4">
          
        <div class="flex flex-col gap-4">

          <div class="flex gap-4">

            <h2>{{$p['title']??''}}</h2>

            <a target="_blank" href="{{$p['github']??''}}" class="w-8">
              <i class="fab fa-github"></i>
            </a>

            @if(isset($p['link']))
              <a target="_blank" href="{{$p['link']??''}}" class="w-8">
                <i class="fas fa-external-link-alt"></i>
              </a>
            @endif

          </div>
          
          <p>{{$p['paragraph']??''}}</p>

        </div>
        
        <div class="flex items-center justify-center h-full">

          @if(isset($p['img']))
            <img src="{{asset('/img/'.$p['img'])}}" alt="{{$p['title']}} Image" class="rounded">
          @else
            <iframe src="{{$p['link']}}" frameborder="0" class="w-full h-full rounded-md bg-white"></iframe>
          @endif

        </div>

      </div>

    @endforeach

  </div>

@endsection
