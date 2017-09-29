var gulp = require('gulp');
var uglify = require('gulp-uglify');//javascript
var concat = require('gulp-concat'); //concatenar los archivos
var sass = require('gulp-sass');//compilar SASS
var rename = require('gulp-rename'); //renombrar archivos
var cssmin = require('gulp-cssmin'); //minificar CSS
var watch = require('gulp-watch'); //ejecutarse al guardar los cambios

gulp.task('bundle', function() {
    gulp.src('resources/assets/sass/*.css')
    .pipe(concat('bundle.css'))
    .pipe(cssmin())
    .pipe(gulp.dest('public/css'));

    gulp.src([
        'resources/assets/js/jquery.js', 
        'resources/assets/js/foundation.js',
        'resources/assets/js/angular.js',
        'resources/assets/js/angular-resource.js',
        'resources/assets/js/angular-route.js'
        ])
    .pipe(concat('bundle.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
});

gulp.task('app-sass', function() {
    gulp.src('./resources/assets/sass/app.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssmin())
    .pipe(gulp.dest('./public/css'));
});
gulp.task('app-js', function() {
    gulp.src('./resources/assets/js/app.js')
    .pipe(uglify())
    .pipe(gulp.dest('./public/js'));
});

gulp.task('watch-app', function() {
    gulp.watch('./resources/assets/js/*.js', ['app-js']);
    gulp.watch('./resources/assets/sass/*.sass', ['app-sass']);
});

gulp.task('default', ['app-sass', 'app-js', 'bundle']);
