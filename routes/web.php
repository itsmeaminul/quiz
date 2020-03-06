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

Route::get('/', 'QuizController@welcome');

Route::get('/abc', 'QuizController@abc');
Route::get('/welcome2', 'QuizController@welcome2');

Route::get('/about', 'QuizController@about');
Route::get('/contact', 'QuizController@contact');
Route::get('/winner', 'QuizController@winner');


//admin login
// Route::post('/admin_login', 'AdminController@admin_dashboard');


// admin routes
Route::get('/admin_login', 'AdminController@admin_login');
Route::get('/admin', 'AdminController@admin');
Route::get('/all_question', 'AdminController@all_question');
Route::get('/set_question', 'AdminController@set_question');
Route::get('/total_participents', 'AdminController@total_participents');
Route::get('/winners', 'AdminController@winners');


// save question
Route::post('/save_question','AdminController@save_question');
Route::get('/show_question','AdminController@show_question');
Route::get('/question_delete/{question_id}','AdminController@question_delete');
Route::get('/question_edit/{question_id}','AdminController@question_edit');






//admin routes
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
// 


Route::resource('crud', 'CrudsController');

Route::post('/save_answer','QuizController@save_answer');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
