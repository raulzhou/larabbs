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
Route::get('/','PagesController@root')->name('index');
//Auth::routes();

//Auth::routes路由包含下面的路由：
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//Auth::routes路由包含路由结束

Route::resource('users','UsersController',['only'=>['show','update','edit']]);
//resource路由相当于下面三个路由：
//Route::get('/users/{user}', 'UsersController@show')->name('users.show'); //显示用户个人信息页面
//Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit'); //显示编辑个人资料页面
//Route::patch('/users/{user}', 'UsersController@update')->name('users.update'); //处理 edit 页面提交的更改
//由此可见，resource路由方法可以节省很多代码，推荐使用

