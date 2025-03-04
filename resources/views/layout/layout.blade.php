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
                const statusCode = event.detail.xhr.status;
                let errorMessage = "Something went wrong!";

                // Map status codes to specific error messages
                const errorMessages = {
                    403: "You don't have permission to access this page!",
                    404: "Page not found!",
                    500: "Internal Server Error!"
                };

                // Use the mapped message or fallback to a default one
                errorMessage = errorMessages[statusCode] || errorMessage;

                // Redirect to the error page with the appropriate status and message
                window.location.href = `/error/${statusCode}?message=${encodeURIComponent(errorMessage)}`;
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
    <div id="content">
        @yield('content')
    </div>
</body>

</html>
