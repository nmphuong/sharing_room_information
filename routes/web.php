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

Route::get('/', function () {
    return view('index');
});
Route::get('/motel-room', function () {
    return view('motel_room');
});
Route::get('/apartment', function () {
    return view('apartment');
});
Route::get('/house', function () {
    return view('house');
});
Route::get('/graft', function () {
    return view('graft');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/user', function () {
    return view('users.user');
});
Route::get('/forum', function () {
    return view('forum');
});