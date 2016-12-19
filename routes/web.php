<?php


//前台登录
Route::get('home/login/login','Home\LoginController@login');
Route::get('home/login/login/{tmp}', 'Home\LoginController@captcha');
Route::get('home/dequanna/dequanna', 'Home\BrandController@dequanna');
Route::get('home/shopingcart/shopingcart', 'Home\CartController@shopingcart');


//后台用户管理
Route::get('admin/user/add', 'Admin\UserController@add');
Route::post('admin/user/insert', 'Admin\UserController@insert');
Route::get('admin/user/index', 'Admin\UserController@index');
Route::get('admin/user/users', 'Admin\UserController@users');
Route::post('admin/user/ajaxchangename', 'Admin\UserController@ajaxChangeName');
Route::get('admin/user/edit/{id}', 'Admin\UserController@edit');
Route::get('admin/user/auth/{id}', 'Admin\UserController@auth');
Route::get('admin/user/delete/{id}', 'Admin\UserController@delete');
Route::post('admin/user/update/{id}', 'Admin\UserController@update');
Route::post('admin/user/update/{id}', 'Admin\UserController@update');
Route::post('admin/user/change/{id}', 'Admin\UserController@change');


//前台用户注册+个人中心
Route::get('kit/captcha/{tmp}', 'KitController@captcha');   //验证码
Route::get('home/user/register','Home\UserController@register');  //注册
Route::post('home/user/add','Home\UserController@add');
Route::get('/home/user/active/{remember_token}','Home\UserController@active');  //激活用户
Route::get('/home/user/myCenter','Home\MyCenterController@myCenter');  //个人中心
Route::get('/home/user/details','Home\MyCenterController@details');

//前台商品列表
Route::get('/home/cate/index','Home\CateController@index');
Route::get('/home/cate/show','Home\GoodsController@show');

//前台首页
Route::get('/','Home\IndexController@index');

//后台首页
Route::get('/admin/index','Admin\IndexController@index');


//后台分类管理
Route::get('/admin/cate/add','Admin\CateController@add');
Route::post('/admin/cate/insert','Admin\CateController@insert');
Route::get('/admin/cate/index','Admin\CateController@index');
Route::get('/admin/cate/edit/{id}','Admin\CateController@edit');
Route::post('/admin/cate/update/{id}','Admin\CateController@update');
Route::get('/admin/cate/delete/{id}','Admin\CateController@delete');

//商品管理
Route::get('/admin/goods/add','Admin\GoodsController@add');