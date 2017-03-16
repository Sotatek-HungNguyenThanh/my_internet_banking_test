<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth/home.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth/footer.css') }}" rel="stylesheet">
     @yield('css')
    <!-- Scripts -->
    <script src="{{ url('/js/app.js') }}"></script>
    @yield('script')
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @include('auth.header')
        <div class="content">
            @yield('content')
        </div>
        @include('auth.footer')
    </div>
</body>
</html>
