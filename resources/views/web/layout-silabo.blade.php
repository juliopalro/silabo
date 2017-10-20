<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="@juliopalro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    @include('web/top-bar')
    
    <div id="crud">
    @yield('content')

    </div>

    <script src="{{ asset('js/bundle.js') }}"></script>
</body>
</html>