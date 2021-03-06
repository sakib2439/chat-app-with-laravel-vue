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

Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@getProfile');
Route::put('profile/{id}', 'API\UserController@updateProfile');
Route::get('search', 'API\UserController@search');
Route::get('online-users', 'API\UserController@onlineUsers');
Route::get('search-online', 'API\UserController@searchOnline');
Route::get('contacts', 'API\ContactController@contacts');
