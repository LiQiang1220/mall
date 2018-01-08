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
// Route::get('/',"home\IndexController@index");
 
// Route::get('/home/sms','UserController@index');

// Route::group(['prefix'=>'home'],function(){
// 	// 登录路由
// 	Route::get('user/login','UserController@login');

// 	// 注册路由
// 	Route::get('user/register','UserController@register');
 



// });


 // 路由不可以使用admin和home，要用加s
Route::get('/',function(){
	echo '<center ><h1>欢迎访问首页</h1></center>';
});
Route::controller('/admins','admin\AdminController');
 
 