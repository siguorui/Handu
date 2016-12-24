<?php


//前台登录
Route::match(['get','post'],'/home/login', 'Home\LoginController@login');
//前台退出
Route::get('home/logout', 'Home\LoginController@logout');


//前台登录
Route::get('home/login/login','Home\LoginController@login');
Route::get('home/login/login/{tmp}', 'Home\LoginController@captcha');



//后台登录
Route::match(['get','post'],'/admin/login', 'Admin\LoginController@login');
//后台退出
Route::get('/admin/logout', 'Admin\LoginController@logout');

//后台用户管理
Route::get('admin/user/add', 'Admin\UserController@add');
Route::post('admin/user/insert', 'Admin\UserController@insert');
Route::get('admin/user/index', 'Admin\UserController@index');
Route::get('admin/user/users', 'Admin\UserController@users');
Route::get('admin/user/usersedit/{id}', 'Admin\UserController@usersedit');
Route::post('admin/user/usersupdate/{id}', 'Admin\UserController@usersupdate');
Route::get('admin/user/usersdelete/{id}', 'Admin\UserController@usersdelete');
Route::post('admin/user/ajaxchangename', 'Admin\UserController@ajaxChangeName');
Route::get('admin/user/edit/{id}', 'Admin\UserController@edit');
Route::get('admin/user/auth/{id}', 'Admin\UserController@auth');
Route::get('admin/user/delete/{id}', 'Admin\UserController@delete');
Route::post('admin/user/update/{id}', 'Admin\UserController@update');
Route::post('admin/user/change/{id}', 'Admin\UserController@change');


//前台用户注册+个人中心
Route::get('kit/captcha/{tmp}', 'KitController@captcha');   //验证码
Route::get('home/user/register','Home\UserController@register');  //注册
Route::post('home/user/add','Home\UserController@add');
Route::get('/home/user/active/{remember_token}','Home\UserController@active');  //激活用户
Route::get('/home/user/myCenter','Home\MyCenterController@myCenter');  //个人中心
Route::get('/home/user/details','Home\MyCenterController@details');		//基本资料
Route::get('/home/user/password','Home\MyCenterController@password');	//修改密码
Route::post('/home/user/updateP','Home\MyCenterController@updateP');	//修改密码
Route::post('/home/update','Home\DetailsController@update');	//更新个人信息
Route::get('/home/user/vip','Home\DetailsController@vip');	//特权
Route::get('/home/user/idea','Home\DetailsController@idea');	//意见反馈
Route::post('/home/user/addidea','Home\DetailsController@addidea');	//意见反馈
Route::get('/home/user/address','Home\DetailsController@address');	//意见反馈

//前台商品列表

Route::get('/home/cate/index/{id}','Home\CateController@index');    //
// Route::get('/home/cate/list','Home\CateController@list');
Route::get('/home/nana/nana/{id}', 'Home\CateController@nana');

//前台首页
Route::get('/','Home\IndexController@index');

//前台搜索
Route::get('/home/search','Home\IndexController@search');

//后台首页
Route::get('/admin/index','Admin\IndexController@index');


//后台分类管理
Route::get('/admin/cate/add','Admin\CateController@add');
Route::post('/admin/cate/insert','Admin\CateController@insert');
Route::get('/admin/cate/index','Admin\CateController@index');
Route::get('/admin/cate/edit/{id}','Admin\CateController@edit');
Route::post('/admin/cate/update/{id}','Admin\CateController@update');
Route::get('/admin/cate/delete/{id}','Admin\CateController@delete');



////后台友情链接处理
//添加页面&添加动作
Route::get('admin/friendlinks/add', 'Admin\LinkController@add');
Route::post('admin/friendlinks/insert', 'Admin\LinkController@insert');
//链接列表
Route::get('admin/friendlinks/index', 'Admin\LinkController@index');
//编辑页面&动作
Route::get('admin/friendlinks/edit/{id}', 'Admin\LinkController@edit');
Route::post('admin/friendlinks/update/{id}', 'Admin\LinkController@update');
//
Route::get('admin/friendlinks/delete/{id}', 'Admin\LinkController@delete');



Route::get('/admin/goods/add/{id}','Admin\GoodsController@add');
Route::post('/admin/goods/insert/{id}','Admin\GoodsController@insert');
Route::get('/admin/goods/index/{id}','Admin\GoodsController@index');  
//商品列表展示
Route::get('/admin/goods/edit/{id}/{urlid}','Admin\GoodsController@edit');    //商品编辑
Route::post('/admin/goods/update/{id}/{urlid}','Admin\GoodsController@update');    //商品编辑
Route::get('/admin/goods/delete/{id}/{urlid}','Admin\GoodsController@delete');  //商品删除


//商品详情
// 前台商品详情展示
Route::get('/home/goods/goods/{id}','Home\GoodsController@goods');
Route::post('/home/goods/addCart','Home\GoodsController@addCart');
//单击颜色尺寸查询库存
Route::post('/home/goods/checkStock','Home\GoodsController@checkStock');
//购物车页面显示
Route::get('/home/goods/shopingcart','Home\GoodsController@shopingcart');



