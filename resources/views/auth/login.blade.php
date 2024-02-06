@extends('layout')
@section('main')
    <div class="flex flex-col justify-center items-center">
        <h1 class="py-4">Login</h1>
        <form action="{{route('login')}}" method="POST" class="p-4 dark:bg-zinc-800 bg-zinc-200 flex flex-col gap-4 w-1/2 rounded">
            @csrf
            <div class="w-full flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" class="rounded dark:bg-zinc-700 bg-zinc-300" id="email">
            </div>
            <div class="w-full flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" class="rounded dark:bg-zinc-700 bg-zinc-300" id="password">
            </div>
            <div class="w-full flex flex-col">
                <button type="submit" class="dark:bg-zinc-600 dark:hover:bg-zinc-500 bg-zinc-400 hover:bg-zinc-300 rounded">Login</button>
            </div>
        </form>
        @error('general')
            <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
@endsection
