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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', 'PostsControllerAPI@index'); // list posts
Route::get('post/{id}', 'PostsControllerAPI@show'); // list single post
Route::post('post', 'PostsControllerAPI@store'); // create new post
Route::put('post', 'PostsControllerAPI@store'); // update post
Route::delete('post/{id}', 'PostsControllerAPI@destroy'); // delete post
