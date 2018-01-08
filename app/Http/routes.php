<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|----------`----------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 首页
Route::get('/',"home\IndexController@index");
  
	 
// });

// Route::get('/home/user/register',function(){
// 	return view('user/register');
	 
	 
// });

// Route::get('/home/sms','UserController@index');

Route::group(['prefix'=>'home'],function(){
	// 登录路由
	Route::get('user/login','UserController@login');

	// 注册路由
	Route::get('user/register','UserController@register');

	// // 首页
	// Route::get('/','IndexController@index');



});
 



?>


