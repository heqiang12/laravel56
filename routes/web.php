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

Route::get('test/{id}', 'TestController@index');
Route::any('login', 'LoginController@login');
//首页
Route::any('index','IndexController@index');
//后台用户管理
Route::prefix('admin','AdminController@index')->group(function(){
	Route::any('admin','AdminController@index');
	Route::any('save','AdminController@save');
});
