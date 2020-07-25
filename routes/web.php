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
    Route::get('/logout', function() {
        Session::forget('session_logged_in');
            if(!Session::has('session_logged_in'))
            {
                return redirect('/login');
            }
        });
    Route::get('/','HomeController@index' );
    Route::get('get-district','HomeController@getDistrict' );
    Route::get('get-ward','HomeController@getWard');
    Route::get('get-room','HomeController@getRoom');
});
Route::group(['prefix' => 'profile'], function () {
    Route::get('/','ProfileController@index' );
    Route::post('/','ProfileController@store' );
});
Route::group(['prefix' => 'post'], function () {
    Route::get('/create-post','PostController@createPost' );
    Route::post('/create-post','PostController@create');
    Route::get('get-district','PostController@getDistrict' );
    Route::get('get-ward','PostController@getWard');
});
Route::group(['prefix' => 'authenticate'], function () {
    Route::get('/','AuthenticateController@index');
});
Route::group(['prefix' => 'forgotpass'], function () {
    Route::get('/','ForgotPasswordController@index');
    Route::post('/','ForgotPasswordController@sendmail');
    Route::get('/auth','ForgotPasswordController@resetpass');
});
Route::group(['prefix' => 'resetpassword'], function () {
    Route::get('/','SetPasswordController@index');
    Route::post('/','SetPasswordController@store');
});