<?php


//前台登录
Route::get('home/login/login','Home\LoginController@login');
Route::get('home/login/login/{tmp}', 'Home\LoginController@captcha');
Route::get('home/dequanna/dequanna', 'Home\BrandController@dequanna');


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
Route::get('/home/cate/index/{id}','Home\CateController@index');    //

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

//后台商品管理
Route::get('/admin/goods/add/{id}','Admin\GoodsController@add');
Route::post('/admin/goods/insert/{id}','Admin\GoodsController@insert');
Route::get('/admin/goods/index/{id}','Admin\GoodsController@index');  //商品列表展示
Route::get('/admin/goods/edit/{id}/{urlid}','Admin\GoodsController@edit');    //商品编辑
Route::post('/admin/goods/update/{id}/{urlid}','Admin\GoodsController@update');    //商品编辑
Route::get('/admin/goods/delete/{id}/{urlid}','Admin\GoodsController@delete');  //商品删除

//商品详情
//购物车
Route::get('home/shopingcart/shopingcart', 'Home\CartController@shopingcart');
// 前台商品详情展示
Route::get('/home/goods/goods/{id}','Home\GoodsController@goods');