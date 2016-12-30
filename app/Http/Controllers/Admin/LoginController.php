<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Hash;
class LoginController extends Controller
{
    //登录
    public function login(Request $request)
    {
        
    	if($request -> isMethod('post'))
    	{
    		$this -> validate($request,[
    			'user_name' => 'required',
    			'password' => 'required',
    			'captcha' => 'required',
    			],[
    			'user_name.required' => '账号不能为空',
    			'password.required' => '密码不能为空',
    			'captcha.required' => '验证码不能为空',
    			]);
    		$data = $request -> except('_token');
            // dd($data);
    		$c = Session::get('milkcaptcha');
    		if($c != $data['captcha'])
    		{
    			$request -> flash();
    			return back() -> with(['info' => '验证码错误']);
    		}

    		$res = DB::table('managers') -> where('user_name', $data['user_name']) -> first();
            if($res -> status != 1)
            {
                return back() -> with(['info' => '账号处于禁用状态中，请联系高级管理员']);
            }
    		$r = Hash::check($data['password'], $res -> password);

    		if(!$r)
    		{
    			$request -> flash();
    			return back() -> with(['info' => '用户名或密码错误']);
    		}
    		Session::set('adminmaster', $res);
    		return redirect('/admin/index') -> with(['info' => '登录成功']);

    	}

    	return view('admin.login');
    }


    public function logout()
    {
    	Session::forget('adminmaster');
    	return redirect('/admin/login') -> with(['info' => '退出成功']);
    }


    // public function layout()
    // {
    //     return view('admin.layout');
    // }

}
