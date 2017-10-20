<html>
  <head>
    <title>Angular 2 y TypeScript</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 1. Cargar librerias -->
     <!-- Polyfill(s) for older browsers -->
    <script src="libraries/core-js/client/shim.min.js"></script>
    <script src="libraries/zone.js/dist/zone.js"></script>
    <script src="libraries/reflect-metadata/Reflect.js"></script>
    <script src="libraries/systemjs/dist/system.src.js"></script>
    <!-- 2. cargamos la Configuracion  SystemJS -->
    <script src="js/bundle.js"></script>
    <script>
      System.import('app').catch(function(err){ console.error(err); });
    </script>
  </head>
  <!-- 3. monitor de la apliación -->
  <body>
    <my-app>Cargando...</my-app>
  </body>
</html>
