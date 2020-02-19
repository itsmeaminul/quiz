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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'QuizController@welcome');

Route::get('/abc', 'QuizController@abc');
Route::get('/welcome2', 'QuizController@welcome2');

Route::get('/about', 'QuizController@about');
Route::get('/contact', 'QuizController@contact');
Route::get('/winner', 'QuizController@winner');

// admin routes
Route::get('/admin', 'AdminController@admin');


Route::resource('crud', 'CrudsController');

Route::post('/save_answer','QuizController@save_answer');



