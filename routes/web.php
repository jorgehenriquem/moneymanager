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

use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/healthcheck', function () {
    $version = app()->version();
    return new Response(["Server is running: {$version}"], Response::HTTP_OK);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
