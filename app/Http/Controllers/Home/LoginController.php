<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use DB;
use Hash;

use Mail;

class LoginController extends Controller
{
    //登录页
    public function login(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $this -> validate($request,[
                'email' => 'required|email',
                'password' => 'required',
                'captcha' => 'required',
                ],[
                'email.required' => '邮箱地址不能为空',
                'email.email' => '邮箱格式不正确',
                'password.required' => '密码不能为空',
                'captcha.required' => '验证码不能为空',
                ]);
            $data = $request -> except('_token');
            // dd($data);
            
            $cap = Session::get('milkcaptcha');
            if($cap != $data['captcha'])
            {
                $request -> flash();
                return back() -> with(['info' => '验证码错误,请重试']);
            }
            $res = DB::table('users as c1')
                -> leftjoin('user_extra as c2', 'c1.id', '=', 'c2.uid')
                -> select('c1.id as zid','c1.*','c2.*')
                -> where('email', $data['email']) -> first();
            if($res -> status != 1)
            {
                return back() -> with(['info' => '账号未激活。']);
            }
            $r = Hash::check($data['password'], $res -> password);
            if(!$r)
            {
                $request -> flash();
                return back() -> with(['info' => '账号或密码错误']);
            }           
            Session::set('master', $res);

            return redirect('/') -> with(['info' => '登录成功']);
        }
    	return view('home.login');
    }
    
    public function logout()
    {
        Session::forget('master');
        return redirect('/home/login') -> with(['info' => '退出成功']);
    }

    
}