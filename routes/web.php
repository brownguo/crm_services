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

Route::get('/', function () {
    return view('welcome');
});


//普通get路由

Route::get('/home/test', 'UserController@home')->name('profile');
Route::get('user/{id}', 'UserController@show')->name('names');
Route::get('/task/{id}', 'TaskController@taskHome');
//路由分组
Route::prefix('v1')->group( function () {
    Route::get('hello/{id}', 'UserController@show');
    Route::get('world', function () { return 'World'; });
});
//访问不存在的时候调用
Route::fallback(function () {
    return '访问的Action不存在';
});