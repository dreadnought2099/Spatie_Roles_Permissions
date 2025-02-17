<nav class="bg-primary flex justify-between items-center p-5 text-white">
    <div>
        <a href="{{ route('home') }}" class="text-3xl text-white font-bold hover-underline">SPATIE</a>
    </div>

    <div class="flex gap-5">
        <a class=" p-2 rounded-md hover-underline" href="{{ route('home') }}">HOME</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('events') }}">EVENTS</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('transaction') }}">TRANSACTIONS</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('profile') }}">PROFILE</a>
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="p-2 rounded-md uppercase hover-underline">LOG OUT</button>
            </form>
        @else
            <a class=" p-2 rounded-md hover-underline" href="{{ route('login') }}">LOGIN</a>
        @endif
    </div>
</nav>
