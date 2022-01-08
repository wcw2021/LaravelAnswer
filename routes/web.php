<?php

use Illuminate\Support\Facades\Route;

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
// })->name('index');

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@submitContact');
Route::get('/profile/{user}', 'PageController@profile')->name('profile');

Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswersController', ['except' => ['index', 'create', 'show']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


