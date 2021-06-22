<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes 路由控制&系统说明
|--------------------------------------------------------------------------
|
| 
| 2021.05.09 design by MA
| √ 数据库配置文件1 /config/database.php
| √ 数据库配置文件2 /.env
| 
| 
|  √bugs：登陆后页面找不到，明明有视图但却not found 已修复！
|  ！必须注意，layouts和admin在视图中是同级文件夹！！
|  ！登录中间件 /HTTP/middleware/CheckLogin  必须引入依赖 否则报session not found
|  ！Modeldetail和models在APP文件夹下，是数据模型类，别特么来控制器和试图里面找！！！
|  
|  ！database的Config文件务必注意写表前缀cms_ 不写系统必炸
|  
| 
| 
| 
*/

//什么都不输入的时候，系统返回欢迎页（已修改） 防绕过登陆中间件生效中
//================================================================================
//默认路由放这儿
Route::get('/', function () {
    return view('welcome');
});

//================================================================================
//不需要中间件的路由放这儿
Route::get('admin/login',"Admin\UserController@login");
Route::post('admin/check',"Admin\UserController@check");

//================================================================================
//需要中间件的路由放这里面
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'login'],function(){

	Route::get('/',"IndexController@index"); //指向后台主页的
});