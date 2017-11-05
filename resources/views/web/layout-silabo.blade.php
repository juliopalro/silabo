<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="@juliopalro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>
<body>
    @include('web/top-bar')
    
    <div id="layout" class="grid-x padding-1">
        @yield('content')
    </div>
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/foundation.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>