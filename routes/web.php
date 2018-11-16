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
})-> name('welcome');

Route::get('/tours', 'PageController@tours')->name('tours');

Route::get('/about','PageController@about')->name('about');
Route::get('/lengths','PageController@lengths')->name('lengths');
Route::get('/guestbook','PageController@guestbook')->name('guestbook');
Route::get('/detail', 'PageController@details')->name('details');
Route::get('/contact', 'PageController@contact')->name('contact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('routes','RouteController');
Route::resource('attractions','AttractionController', ['except'=>['index', 'create','show']]);
