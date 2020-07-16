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

//TODO mudar nome dos controllers e colocar a palavra controller na frente!!

Route::get('/healthcheck', 'HealthCheck@index');
Route::get('users', 'Users@show');
Route::get('users/{userId}', 'Users@showUser');
Route::post('users/create', 'Users@create');


