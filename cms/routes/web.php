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

// search.blade.phpを表示
Route::get('/', 'MemStatusController@index');



// add_listing.blade.phpを表示
Route::get('/add_listing', function () {
    return view('add_listing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ユーザー登録
Route::post('auth/register','Auth\RegisterController@create');

// ジム登録
Route::post('/add_gym','GymController@store');