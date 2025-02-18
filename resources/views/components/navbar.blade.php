<nav class="bg-primary flex justify-between items-center p-5 text-white">
    <div>
        <a href="{{ route('home') }}" class="text-3xl text-white font-bold hover-underline" hx-get="{{ route('home') }}"
            hx-target="#main-content" hx-push-url="true">
            SPATIE
        </a>
    </div>

    <div class="flex gap-5">
        <a class=" p-2 rounded-md hover-underline" href="{{ route('home') }}" hx-get="{{ route('home') }}"
            hx-target="#main-content" hx-push-url="true">HOME</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('events') }}" hx-get="{{ route('events') }}"
            hx-target="#main-content" hx-push-url="true">EVENTS</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('transaction') }}" hx-get="{{ route('transaction') }}"
            hx-target="#main-content" hx-push-url="true">TRANSACTIONS</a>
        <a class=" p-2 rounded-md hover-underline" href="{{ route('profile') }}" hx-get="{{ route('profile') }}"
            hx-target="#main-content" hx-push-url="true">PROFILE</a>
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST" hx-post="{{ route('logout') }}"
                hx-target="nav" hx-swap="outerHTML" hx-on::after-request="window.location.reload()">
                @csrf
                <button type="submit" class="p-2 rounded-md hover-underline">LOG OUT</button>
            </form>
        @else
            <a class=" p-2 rounded-md hover-underline" href="{{ route('login') }}" hx-get="{{ route('login') }}" 
                hx-target="#main-content" 
                hx-push-url="true">LOGIN
            </a>
        @endif
    </div>
</nav>

