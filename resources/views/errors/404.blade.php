@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))

{{-- <!-- resources/views/error/404.blade.php -->
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-2xl font-bold text-primary">404</h1>
    <p class="mt-2 text-lg text-dark">Page not found!</p>
    <a href="{{ url('/') }}"
        class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-gray-500 transition duration-300"
        hx-get="{{ url('/') }}" hx-target="#content" hx-swap="outerHTML">
        Go Home
    </a>
</div> --}}
