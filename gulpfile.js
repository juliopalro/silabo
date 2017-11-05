// Gulp config file

var gulp = require('gulp');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');// min CSS
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var sequence = require('gulp-sequence');
var uglify = require('gulp-uglify');// min JS



// task for sass
gulp.task('sass', function(){
  return gulp.src('./resources/assets/sass/app.sass')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'));
});

// task for js
gulp.task("js", function(){
  return gulp.src('./resources/assets/js/*.js')
  .pipe(minify())
  .pipe(rename('bundle.js'))
  .pipe(gulp.dest('./public/js'));
});

// copy of libraries fro the proyect angular
gulp.task("copy-libraries", function(){
  return gulp.src([
      'core-js/client/**',
      'systemjs/dist/system.src.js',
      'reflect-metadata/**',
      'rxjs/**',
      'zone.js/dist/**',
      '@angular/**',
      'jquery/dist/jquery.*js',
      'bootstrap/dist/js/bootstrap.*js',
      '@angular2-material/**/*',
      'primeng/**/**/*',
      'angular-search-list/*',
      'chart.js/dist/*',
      '!/**/*.ts'
    ],
    {cwd: "node_modules/**"})
  .pipe(gulp.dest('./public/libraries'));
});

// copy all html of angular
gulp.task("copy-html", function(){
  return gulp.src('./resources/app/**/*.html')
  .pipe(gulp.dest('./public/app'));
});

// compile typescript
gulp.task('tsc-js', function(){
  return gulp.src('./resources/app/**/*.ts')
    .pipe(ts())
    .pipe(gulp.dest('./public/app'));
});

// Watchers
gulp.task('sass:watch', function () {
  gulp.watch('./resources/assets/sass/*.sass', ['sass']);
});
gulp.task('js:watch', function () {
  gulp.watch('./resources/assets/js/*.js', ['js']);
});
gulp.task('copy-html:watch', function () {
  gulp.watch('resources/app/**/*.html',{cwd: './'}, ['copy-html']);
});
gulp.task('tsc-js:watch', function () {
  gulp.watch('resources/app/**/*.ts',{cwd: './'}, ['tsc-js']);
});
gulp.task('watch', function () {
  gulp.watch('./resources/assets/sass/*.sass', ['sass']);
  gulp.watch('./resources/assets/js/*.js', ['js']);
  gulp.watch('resources/app/**/*.html',{cwd: './'}, ['copy-html']);
  gulp.watch('resources/app/**/*.ts',{cwd: './'}, ['tsc-js']);
});
// Sequience Tasks
gulp.task('start', function (cb) {
    runSequence('copy-libraries', 'tsc-js', 'copy-html', 'js', 'sass', cb);
});
