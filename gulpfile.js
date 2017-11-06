// Gulp config file

var gulp = require('gulp');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');// min CSS
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var runSequence = require('run-sequence');
var uglify = require('gulp-uglify');// min JS
var gulpCopy = require('gulp-copy');
var deletComents = require('gulp-strip-css-comments');



/*
* Tasks
*/
gulp.task('app-sass', function(){
  return gulp.src('./resources/assets/sass/app.scss')
    .pipe(sass())
    .pipe(cssmin())
    .pipe(rename('app.css'))
    .pipe(gulp.dest('./public/assets/css'));
});
gulp.task('bundle-css', function(){
  return gulp.src([
    './resources/assets/css/foundation.min.css', 
    './resources/assets/css/font-awesome.min.css'])
    .pipe(concat('bundle.css'))
    .pipe(cssmin())
    .pipe(rename('bundle.css'))
    .pipe(gulp.dest('./public/assets/css'));
});

gulp.task('app-js', function(){
  return gulp.src('./resources/assets/js/app.js')
    .pipe(uglify())
    .pipe(rename('app.js'))
    .pipe(gulp.dest('./public/assets/js'));
});
gulp.task('bundle-js', function(){
  return gulp.src([
      './resources/assets/js/jquery.js',
      './resources/assets/js/foundation.min.js',
      './resources/assets/js/vue.js',
      './resources/assets/js/vue-router.js',
      './resources/assets/js/axios.js'
    ])
    .pipe(concat('bundle.js'))
    .pipe(uglify())
    .pipe(rename('bundle.js'))
    .pipe(gulp.dest('./public/assets/js'));
});

/*
* task for copy files
 */
gulp.task("copyFonts", function(){
  return gulp.src('./resources/assets/fonts/*.*')
  .pipe(gulp.dest('./public/assets/fonts'));
});
gulp.task("copyVueComponent", function(){
  return gulp.src('./resources/assets/js/components/*.vue')
  .pipe(gulp.dest('./public/assets/js/components'));
});

/**
 * Watchers
*/
gulp.task('app-sass:watch', function () {
  gulp.watch('resources/assets/sass/*.scss', {cwd: './'}, ['app-sass']);
});
gulp.task('app-js:watch', function () {
  gulp.watch('resources/assets/js/app.js', {cwd: './'}, ['app-js']);
});
gulp.task('vueComponent:watch', function () {
  gulp.watch('resources/assets/js/components/*.vue', {cwd: './'}, ['copyVueComponent']);
});

/**
 * Sequience Tasks
*/
gulp.task('build', function (callback) {
    runSequence( 
      'app-js', 
      'bundle-js', 
      'app-sass', 
      'bundle-css', 
      'copyFonts', 
      'copyVueComponent', 
      callback);
});