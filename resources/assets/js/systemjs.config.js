(function(global) {
  // Mapa que indica al cargador del sistema dónde buscar cosas
  var map = {
    'app':                        'app',
    '@angular':                   'libraries/@angular',
    'angular2-in-memory-web-api': 'libraries/angular2-in-memory-web-api',
    'rxjs':                       'libraries/rxjs'
  };
  // paquetes que indica al cargador de Sistema de cómo se carga cuando no hay nombre de archivo y / o sin extensión
  var packages = {
    'app':                        { main: 'main.js',  defaultExtension: 'js' },
    'rxjs':                       { defaultExtension: 'js' },
    'angular2-in-memory-web-api': { main: 'index.js', defaultExtension: 'js' },
  };
  var ngPackageNames = [
    'common',
    'compiler',
    'core',
    'forms',
    'http',
    'platform-browser',
    'platform-browser-dynamic',
    'router',
    'router-deprecated',
    'upgrade',
  ];

  function packIndex(pkgName) {
    packages['@angular/'+pkgName] = { main: 'index.js', defaultExtension: 'js' };
  }

  function packUmd(pkgName) {
    packages['@angular/'+pkgName] = { main: '/bundles/' + pkgName + '.umd.js', defaultExtension: 'js' };
  }

  var setPackageConfig = System.packageWithIndex ? packIndex : packUmd;
  // Añadir entradas de los paquetes para los paquetes de angular
  ngPackageNames.forEach(setPackageConfig);
  var config = {
    map: map,
    packages: packages
  };
  System.config(config);
})(this);
