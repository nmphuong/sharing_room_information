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
// try {
//     DB::connection()->getPdo();
// } catch (\Exception $e) {
//     die("Could not connect to the database.  Please check your configuration. error:" . $e );
// }
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/motel-room', function () {
//     return view('motel_room');
// });
// Route::get('/apartment', function () {
//     return view('apartment');
// });
// Route::get('/house', function () {
//     return view('house');
// });
// Route::get('/graft', function () {
//     return view('graft');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/user', function () {
//     return view('users.user');
// });
// Route::get('/add_post', function () {
//     return view('posts.addPost');
// });
// Route::get('/edit', function () {
//     return view('posts.editPost');
// });
// Route::get('/post', function () {
//     return view('users.managerPost');
// });
// Route::get('/login', function () {
//     return view('users.loginRegister');
// });
// Route::get('/forum', function () {
//     return view('forum');
// });
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