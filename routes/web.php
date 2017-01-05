<?php


//前台登录
Route::match(['get','post'],'/home/login', 'Home\LoginController@login');
//前台退出
Route::get('home/logout', 'Home\LoginController@logout');



//前台登录
Route::get('home/login/login','Home\LoginController@login');
Route::get('home/login/login/{tmp}', 'Home\LoginController@captcha');

//忘记密码
Route::get('home/forgetPassword/forgetPassword','Home\ForgetPasswordController@forgetPassword');
Route::post('home/changePassword','Home\ForgetPasswordController@changePassword');
Route::get('home/forgetPassword/password','Home\ForgetPasswordController@password');
Route::post('home/changepassword','Home\ForgetPasswordController@changepassword');
Route::get('home/forgetPassword/upassword/{rem_token}','Home\ForgetPasswordController@upassword');
Route::post('home/upwd','Home\ForgetPasswordController@upwd');






//前台登录
Route::get('home/login/login','Home\LoginController@login');
Route::get('home/login/login/{tmp}', 'Home\LoginController@captcha');

//后台登录
Route::match(['get','post'],'/admin/login', 'Admin\LoginController@login');
//后台中间件
Route::group(['middleware' => 'login'], function(){

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


//网站配置
Route::get('/admin/webConfig/webConfig','Admin\webConfigController@webConfig');
Route::post('/admin/webConfig/update','Admin\webConfigController@update');


//后台商品管理列表
Route::get('/admin/product/add','Admin\ProductController@add');
Route::post('/admin/product/insert','Admin\ProductController@insert');
Route::get('/admin/product/index','Admin\ProductController@index');
Route::get('/admin/product/edit/{id}','Admin\ProductController@edit');
Route::post('/admin/product/update/{id}','Admin\ProductController@update');
Route::get('/admin/product/delete/{id}','Admin\ProductController@delete');
Route::post('/admin/product/addStock','Admin\ProductController@addStock');
//商品详情列表
Route::get('/admin/product/productDetail/{id}','Admin\ProductController@productDetail');
Route::get('/admin/stock/stockedit/{id}','Admin\ProductController@stockedit');
Route::post('/admin/stock/stockupdate/{id}','Admin\ProductController@stockupdate');
Route::get('/admin/stock/stockdelete/{id}','Admin\ProductController@stockdelete');

//后台意见反馈
Route::get('admin/user/idea', 'Admin\UserController@idea');
Route::post('admin/user/ajaxdel', 'Admin\UserController@ajaxdel');

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


//张伟订单列表页
Route::get('/admin/orders/index','Admin\OrderController@index');
//详情页
Route::get('/admin/orders/details/{id}','Admin\OrderController@details');
//张伟订单完成页
Route::get('/admin/orders/finish','Admin\OrderController@finish');
Route::get('/admin/orders/detailsfinish/{id}','Admin\OrderController@detailsfinish');
Route::get('/admin/orders/delete/{id}','Admin\OrderController@delete');
//更改状态页
Route::get('/admin/orders/edit/{id}','Admin\OrderController@edit');
Route::post('/admin/orders/update/{id}','Admin\OrderController@update');

//张伟前台轮播图
Route::get('admin/carcoul/add','Admin\CarcoulController@add');
Route::post('admin/carcoul/insert','Admin\CarcoulController@insert');
Route::get('admin/carcoul/index','Admin\CarcoulController@index');
Route::get('admin/carcoul/delete/{id}','Admin\CarcoulController@delete');

Route::get('/admin/chat/showmsg','Admin\IndexController@showmsg');
Route::post('/admin/chat/sendmsg','Admin\IndexController@sendmsg');
Route::get('/admin/chat/dropchat','Admin\IndexController@dropchat');

});






//前台用户注册+个人中心
Route::get('kit/captcha/{tmp}', 'KitController@captcha');   //验证码
Route::get('home/user/register','Home\UserController@register');  //注册
Route::post('home/user/add','Home\UserController@add');
Route::post('home/user/insert','Home\UserController@insert');
Route::get('/home/user/active/{remember_token}','Home\UserController@active');  //激活用户
Route::get('/home/user/myCenter','Home\MyCenterController@myCenter');  //个人中心
Route::get('/home/user/details','Home\MyCenterController@details');		//基本资料
Route::get('/home/user/password','Home\MyCenterController@password');	//修改密码
Route::post('/home/user/updateP','Home\MyCenterController@updateP');	//修改密码
Route::post('/home/update','Home\DetailsController@update');	//更新个人信息
Route::get('/home/user/vip','Home\DetailsController@vip');	//特权
Route::get('/home/user/idea','Home\DetailsController@idea');	//意见反馈
Route::post('/home/user/addidea','Home\DetailsController@addidea');	//意见反馈

Route::get('/home/user/favorite','Home\DetailsController@favorite');	//意见反馈



Route::get('/home/user/address','Home\DetailsController@address');	//地址管理
Route::post('/home/details/addaddr','Home\DetailsController@addaddr');	//地址管理
Route::get('/home/details/delete/{id}','Home\DetailsController@delete'); //删除地址
Route::post('/home/details/select','Home\DetailsController@select'); //删除地址
Route::post('/home/details/upaddress','Home\DetailsController@upaddress'); //删除地址
Route::post('/home/details/defadd','Home\DetailsController@defadd');	//是否默认



//前台商品列表

Route::get('/home/cate/index/{id}','Home\CateController@index');    //
// Route::get('/home/cate/list','Home\CateController@list');


Route::get('/home/cate/goodsList/{id}', 'Home\CateController@goodsList');
Route::post('/home/cate/ajaxupdate', 'Home\CateController@ajaxupdate');



//前台首页
Route::get('/','Home\IndexController@index');
Route::get('/home/user/maintain','Home\IndexController@index');

//前台搜索
Route::get('/home/search','Home\IndexController@search');
Route::get('/home/searchoff','Home\IndexController@searchoff');




//商品详情
// 前台商品详情展示
Route::get('/home/goods/goods/{id}','Home\GoodsController@goods');
Route::post('/home/goods/addCart','Home\GoodsController@addCart');
//单击颜色尺寸查询库存
Route::post('/home/goods/checkStock','Home\GoodsController@checkStock');
//购物车页面显示
Route::get('/home/goods/shopingcart','Home\GoodsController@shopingcart');
//购物车商品移入收藏夹
Route::post('/home/goods/removeToCollect','Home\GoodsController@removeToCollect');
Route::post('/home/goods/toPay','Home\GoodsController@toPay');
Route::post('/home/goods/buy_now','Home\GoodsController@buy_now');  //立即购买



//订单添加地址
Route::post('/home/order/add_address','Home\OrderController@add_address');
//订单删除地址
Route::post('/home/order/del_address','Home\OrderController@del_address');
Route::post('/home/order/edit_address','Home\OrderController@edit_address');
Route::post('/home/order/update_address','Home\OrderController@update_address');
Route::post('/home/order/submit_order','Home\OrderController@submit_order');
Route::post('/home/order/pay_now','Home\OrderController@pay_now');

//购物车商品删除
Route::post('/home/goods/deleteCart','Home\GoodsController@deleteCart');



//张伟前台订单页
Route::get('/home/orders/myOrders','Home\MyCenterController@myOrders');
//评价列表
Route::get('/home/orders/ue/{id}','Home\MyCenterController@ue');
Route::post('/home/orders/insert/{id}','Home\MyCenterController@insert');


//购物车商品移入收藏夹
Route::post('/home/goods/removeToCollect','Home\GoodsController@removeToCollect');
Route::post('/home/goods/toPay','Home\GoodsController@toPay');



//评价列表
Route::get('/home/orders/ue','Home\MyCenterController@ue');
Route::post('/home/orders/insert/{id}','Home\MyCenterController@insert');


//在线客服聊天
Route::get('/home/chat/showmsg','Home\IndexController@showmsg');
Route::post('/home/chat/sendmsg','Home\IndexController@sendmsg');



