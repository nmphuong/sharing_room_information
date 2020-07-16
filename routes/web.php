<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" midPackage Control: idleware group. Now create something great!
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
});
Route::group(['prefix' => 'profile'], function () {
    Route::get('/','ProfileController@index' );
    Route::post('/','ProfileController@store' );
});
Route::group(['prefix' => 'post'], function () {
    Route::get('/create-post','PostController@createPost' );
    Route::get('get-district','PostController@getDistrict' );
    Route::get('get-ward','PostController@getWard');
});
Route::group(['prefix' => 'search'], function () {
    Route::get('/','SearchController@index' );
});
Route::group(['prefix' => 'approval'], function () {
    Route::get('/','ApprovalController@index' );
});
