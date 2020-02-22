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

Route::group(['namespace' => 'Web'], function() {
    Route::get('/', 'HomeController@welcome');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes(['verify' => true]);

Route::get('test', function() {
    return \App\Models\Post::find(2)->tags()->get();
});

