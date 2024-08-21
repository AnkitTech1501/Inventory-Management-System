<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Optional: Add custom JS file -->
    <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
</body>
</html>
