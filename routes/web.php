<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
  return view('welcome'); 
});

Route::get('/{step1?}/{step2?}/{step3?}/{step4?}/{step5?}/{step6?}/{step7?}/{step8?}', function () { 
  return view('welcome'); 
});

/*
Route::resource('/teachers', function () { return view('vuejs'); });
Route::resource('teachers', 'web\TeacherController');

Route::get('courses/create/{id}', 'web\CourseController@create');
Route::resource('courses', 'web\CourseController');
Route::get('courses/{id}/silabo', 'web\CourseController@showSilabo');
Route::resource('bibliographies', 'web\BibliographyController');
Route::resource('weeks', 'web\WeekController');


// ruta de prueba para la configuración
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('vuejs');
    });
});
*/