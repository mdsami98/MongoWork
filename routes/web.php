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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/user-list', 'HomeController@showUser')->name('userList');
Route::get('/user-list-ajax', 'HomeController@showUserAjax')->name('userListAjax');
Route::get('/user', 'HomeController@ajaxRequest')->name('ajax-request');


Route::post('/pay', 'CheckOutController@charge')->name('charge');


