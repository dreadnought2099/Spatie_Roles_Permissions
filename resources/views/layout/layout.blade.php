<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/htmx.org@2.0.4"></script>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
        document.body.addEventListener('htmx:responseError', function(event) {
            if (event.detail.xhr.status === 403) {
                alert("You don't have permission to access this page!");
                window.location.href = "{{ route('home') }}"; 
            }
        });
    });
    </script>

    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('image/user.png') }}">
    <title>Spatie</title>
</head>

<body class="overflow-hidden">
    @if (!request()->header('HX-REQUEST'))
        @include('components.navbar')
    @endif
    
    <div id="main-content">
        @yield('content')
    </div>
</body>

</html>
