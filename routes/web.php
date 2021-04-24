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

//ユーザー登録
route::get('signup', 'Auth\RegisterController@showRegistrationFrom')->name('signup.get');
route::post('signup', 'Auth\RegisterController@register')->name('signup.post');