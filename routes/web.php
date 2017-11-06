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
    return view('web/index');
});
Route::resource('teachers', 'web\TeacherController');
Route::get('courses/create/{id}', 'web\CourseController@create');
Route::resource('courses', 'web\CourseController');
Route::get('courses/{id}/silabo', 'web\CourseController@showSilabo');
Route::resource('bibliographies', 'web\BibliographyController');
Route::resource('weeks', 'web\WeekController');
Route::resource('contents', 'web\ContentController');

// ruta de prueba para la configuración
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('vuejs');
    });
});
