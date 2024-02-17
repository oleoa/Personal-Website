@extends('layouts.main')
@section('main')
    
    <div class="grid gap-4 py-4">

        @foreach ($projects as $p)

            <div class="p-4 bg-gradient-to-r from-blue-900 to-blue-500 rounded-xl flex flex-col gap-4">

                <h2>{{$p['title']}}</h2>
                
                <div class="flex gap-4">
                    <a target="_blank" href="{{$p['github']}}">Github</a>
                    <a target="_blank" href="{{$p['link']}}">Visit</a>
                </div>

            </div>

        @endforeach

    </div>

@endsection
