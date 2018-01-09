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

Route::get('/', 'ExerciseController@index');

Route::get('/add', 'ExerciseController@add');
Route::post('/add', 'ExerciseController@store');

Route::get('/generate', 'ScheduleController@index');
Route::post('/schedule', 'ScheduleController@store');

Route::get('/track', 'ExerciseController@track');

Route::get('/exercises', 'ExerciseController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
