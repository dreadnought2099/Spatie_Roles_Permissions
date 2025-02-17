<nav class="bg-primary flex justify-between items-center p-5 text-white uppercase">
    <div>
        <a href="{{ route('home') }}" class="text-3xl text-white font-bold hover-underline">Spatie</a>
    </div>

    <div class="flex gap-5">
        <a class=" p-2 rounded-md hover-underline" href="{{ route('home') }}">Home</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('events') }}">Events</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('transaction') }}">Transactions</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('profile') }}">Profile</a>
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="p-2 rounded-md uppercase hover-underline">Logout</button>
            </form>
        @else
            <a class=" p-2 rounded-md hover-underline" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
