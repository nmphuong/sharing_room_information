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
Route::group(['prefix' => 'login'], function () {
    Route::get('/','LoginController@index' );
    Route::post('/','LoginController@store' );
});
Route::group(['prefix' => 'register'], function () {
    Route::post('/','LoginController@create' );
});
Route::group(['prefix' => '/'], function () {
    Route::get('/','HomeController@index' );
    Route::get('/logout', function() {
        Session::forget('session_logged_in');
            if(!Session::has('session_logged_in'))
            {
                return redirect('/login');
            }
        });
});
Route::group(['prefix' => 'profile'], function () {
    Route::get('/','ProfileController@index' );
});