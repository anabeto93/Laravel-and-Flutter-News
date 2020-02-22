<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'API', 'prefix' => 'v1'], function() {
    /*Route::resource('users', 'UsersController', ['only' => [
        'index', 'show', 'update'
    ]]);

    Route::resource('posts', 'PostsController', ['only' => [
        'index', 'show', 'update', 'destroy'
    ]]);

    Route::resource('comments', 'CommentsController', ['only' => [
        'index', 'show', 'update', 'destroy'
    ]]);

    Route::resource('images', 'ImagesController', ['only' => [
        'index', 'show', 'update', 'destroy'
    ]]);

    Route::resource('videos', 'VideosController', ['only' => [
        'index', 'show', 'update', 'destroy'
    ]]);*/

    Route::resource('tags', 'TagsController', ['only' => [
        'index', 'show', 'update', 'destroy'
    ]]);
});
