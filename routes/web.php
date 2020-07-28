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
//=============Login=============
Route::group(['prefix' => 'login'], function () {
    Route::get('/','LoginController@index' );
    Route::post('/','LoginController@store' );
});
//=============Register=============
Route::group(['prefix' => 'register'], function () {
    Route::post('/','LoginController@create' );
});
//=============Logout forgot session=============
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
//=============Motel room=============
Route::group(['prefix' => 'motel-room'], function () {
    Route::get('/','MotelRoomController@index' );
    Route::get('get-district','HomeController@getDistrict' );
    Route::get('get-ward','HomeController@getWard');
    Route::get('get-room','HomeController@getRoom');
});
//=============Apartment=============
Route::group(['prefix' => 'apartment'], function () {
    Route::get('/','ApartmentController@index' );
});
//=============House=============
Route::group(['prefix' => 'house'], function () {
    Route::get('/','HouseController@index' );
});
//=============House=============
Route::group(['prefix' => 'other'], function () {
    Route::get('/','OtherController@index' );
});
//=============About=============
Route::group(['prefix' => 'about'], function () {
    Route::get('/','AboutController@index' );
});
//=============Contact=============
Route::group(['prefix' => 'contact'], function () {
    Route::get('/','ContactController@index' );
    Route::get('/sendcontact','ContactController@store' );
});
//=============Profile=============
Route::group(['prefix' => 'profile'], function () {
    Route::get('/','ProfileController@index' );
    Route::post('/','ProfileController@store' );
});
//=============Profile=============
Route::group(['prefix' => 'changepwd'], function () {
    Route::get('/','ChangePasswordController@index' );
    Route::post('/','ChangePasswordController@store' );
});
//=============Create a post=============
Route::group(['prefix' => 'post'], function () {
    Route::get('/create-post','PostController@createPost' );
    Route::post('/create-post','PostController@create');
    Route::get('get-district','PostController@getDistrict' );
    Route::get('get-ward','PostController@getWard');
});
//=============Authenticate email register=============
Route::group(['prefix' => 'authenticate'], function () {
    Route::get('/','AuthenticateController@index');
});
//=============forgot password and authenticate email=============
Route::group(['prefix' => 'forgotpass'], function () {
    Route::get('/','ForgotPasswordController@index');
    Route::post('/','ForgotPasswordController@sendmail');
    Route::get('/auth','ForgotPasswordController@resetpass');
});
//=============Set new password before authenticate email=============
Route::group(['prefix' => 'resetpassword'], function () {
    Route::get('/','SetPasswordController@index');
    Route::post('/','SetPasswordController@store');
});
//=============Search box=============
Route::group(['prefix' => 'result'], function () {
    Route::get('/','SearchController@index');
});
//=============Approval=============
Route::group(['prefix' => 'approval'], function () {
    Route::get('/','ApprovalController@index');
    Route::get('/review','ApprovalController@review');
    Route::get('/accept','ApprovalController@store');
});
Route::group(['prefix' => 'detail'], function () {
    Route::get('/','DetailController@index');
});