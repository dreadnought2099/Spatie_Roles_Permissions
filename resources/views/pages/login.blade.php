@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-center pt-20">

        <form class="flex flex-col bg-gray-200 p-6 rounded-lg shadow-lg shadow-gray-300 w-full max-w-sm mx-auto space-y-4 border border-primary"
            action="{{ route('signin') }}" method="POST">
            @csrf

            <h2 class="text-2xl font-bold text-dark text-center">Log <span class="text-primary">in</span></h2>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required autocomplete="email"
                    class="mt-1 w-full p-2 border border-primary rounded-lg focus:ring-primary focus:border-primary outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password"
                    class="mt-1 w-full p-2 border border-primary rounded-lg focus:ring-primary focus:border-primary outline-none">
            </div>

            <button type="submit"
                class="w-full bg-primary hover:bg-gray-500 hover:text-white text-white font-medium py-2 rounded-lg transition duration-300">
                Log in
            </button>

        </form>

        @if (session('error'))
            <div class="text-red-500 p-3 rounded-md">{{ session('error') }}</div>
        @endif
    </div>
@endsection
