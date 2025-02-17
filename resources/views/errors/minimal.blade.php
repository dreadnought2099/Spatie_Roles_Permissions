@extends('layout.layout')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-2xl font-bold text-dark">{{ $exception->getStatusCode() }}</h1>
    <p class="mt-2 text-lg text-dark">{{ $exception->getMessage() ?: 'Something went wrong' }}</p>
    <a href="{{ url('/') }}" class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-gray-500 transition duration-300">
        Go Home
    </a>
</div>
@endsection
