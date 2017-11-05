<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="@juliopalro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Silabo</title>
  </head>
  <body>
    
    @yield('content')

    <script src="{{ asset('assets/js/vendor/jquery.js' }}"></script>
    <script src="{{ asset('assets/js/vendor/what-input.js' }}"></script>
    <script src="{{ asset('assets/js/vendor/foundation.js' }}"></script>
    <script src="{{ asset('assets/js/app.js' }}"></script>

    <script src="{{ asset('assets/js/axios.js') }}"></script>

  </body>
</html>
