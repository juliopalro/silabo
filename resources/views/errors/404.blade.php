<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Curso de Diseño web I - II</title>
    <meta name="author" content="@juliopalro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <div id="app">
      <div class="grid-x">
        <div class="cell">
          <ul class="menu">
            <li class="menu-text">Silabo</li>
            <router-link exact-active-class="active" tag="li" to="/"><a>Home</a></router-link>
            <router-link exact-active-class="active" tag="li" to="/teachers"><a>Teachers</a></router-link>
          </ul>
        </div>
        <div class="cell padding-2">
          <router-view></router-view>
        </div>
      </div>
    </div>

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>