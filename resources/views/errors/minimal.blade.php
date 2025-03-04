@extends('layout.layout')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <h1 class="text-2xl font-bold text-primary">{{ $status }}</h1>
        <p class="mt-2 text-lg text-dark">{{ $message }}</p>

        <a href="{{ url('/') }}"
            class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-gray-500 transition duration-300"
            hx-get="{{ url('/') }}" hx-target="#content" hx-swap="outerHTML">
            Go Home
        </a>
    </div>
@endsection
