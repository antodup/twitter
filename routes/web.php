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

Route::group(['middleware' => ['web']] ,function(){
  Auth::routes();
});

Route::group(['middleware' => ['web', 'auth']] ,function(){
    Route::get('/', function () {
        return redirect('/');
    });
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/', 'TweetController@getall');
    //Profile username
    Route::get('/profile/{name}', 'HomeController@viewProfile');
    //Page tout les utilisateurs
    Route::get('/users', 'HomeController@getAllUsers');
    Route::get('/users/{username}', 'HomeController@getUser');
});
Route::post('/post-tweet', 'TweetController@create');
