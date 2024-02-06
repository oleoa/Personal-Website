@extends('layout')
@section('main')
    <div class="flex flex-col gap-4 items-center">
        <h1>Register</h1>
        <form action="{{route('register')}}" method="POST" class="w-1/2 flex flex-col gap-4 bg-zinc-300 dark:bg-zinc-800 p-4 rounded">
            @csrf
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="rounded bg-zinc-200 dark:bg-zinc-700">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="rounded bg-zinc-200 dark:bg-zinc-700">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="rounded bg-zinc-200 dark:bg-zinc-700">
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="rounded bg-zinc-200 dark:bg-zinc-700">
                @error('password_confirmation')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="flex items-center justify-start">
                <button type="submit" class="px-4 py-2 rounded bg-zinc-200 dark:bg-zinc-700">Register</button>
            </div>
        </form>
    </div>
@endsection
