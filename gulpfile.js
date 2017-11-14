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
var vueify = require('gulp-vueify');
const babel = require('gulp-babel');
const webpack = require('webpack-stream');

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
  return gulp.src([
    "./resources/assets/js/components/*.js", 
    "./resources/assets/js/app.routes.js", 
    "./resources/assets/js/app.js"])
    .pipe(concat('app.js'))
    //.pipe(babel({
    //        presets: ['env']
    //   }))
    //.pipe(uglify())
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


/**
 * Watchers
*/
gulp.task('app-sass:watch', function () {
  gulp.watch('./resources/assets/sass/*.scss', ['app-sass']);
});
gulp.task('app-js:watch', function () {
  gulp.watch(['./resources/assets/js/components/*.js', './resources/assets/js/app.js'], ['app-js']);
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
      callback);
});