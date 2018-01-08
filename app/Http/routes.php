<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//前台登录注册
Route::get('/home/register',function(){
     return view('/home/register');
});

Route::get('/home/login',function(){
	return view('/home/login');
});

Route::get('/home/index',function(){
	return view('/home/index');
});

//后台登录
Route::get('/admin/login',function(){
	return view('/admin/login');
});
//收货地址
Route::get('/addr/addr',function(){
	return view('/address/address');
});

