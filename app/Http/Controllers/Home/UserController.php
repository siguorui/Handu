<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use Mail;

class UserController extends Controller
{
    //register
    public function register()
    {
    	return view('home.user.register');
        
    }

    //add
    public function add(Request $request)
    {
    	$this -> validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|confirmed',
    		'password_confirmation' => 'required'
    		],[
    		'email.required' => '邮箱地址不能为空',
    		'email.email' => '邮箱格式不正确',
    		'password.required' => '密码不能为空',
    		'password.confirmed' => '确认密码不一致',
    		'password_comfiration.required' => '确认密码不能为空'
    		]);
    	$data = $request -> except('agreement','captcha','_token','password_confirmation');
       
    	$data['password'] = Hash::make($data['password']);
    	
    	$data['rem_token'] = str_random(50);
    	$time = time();
        $data['add_time'] = $time;
        $data['last_login'] = $time;
        $userInput = \Request::get('captcha');

        $res = DB::table('users') -> where('email',$data['email']) -> first();
        if($res)
        {
            return back() -> with(['info' => '该账户已注册']);
        }
        
		if (Session::get('milkcaptcha') == $userInput) {

			//用户表添加数据
    		$res = DB::table('users')->insertGetId($data);
    		
			if($res)
	    	{
                //用户特权表添加数据
                $ures = DB::table('user_extra') -> insert(array('score' => '0','uid' => $res));
                //用户详情表添加数据
	    		$dres = DB::table('user_details') -> insert(array('sex' => '0','uid' => $res));

	    		// Mail::raw('韩都衣舍注册激活邮件',function($message){
	    		// 	$message -> to('360314105@qq.com');
	    		// 	$message -> subject('韩都衣舍注册邮箱激活');
	    		// });
                
	    		Mail::send('mails.active',['data' => $data],
                    function($message) use ($data){
	    			$message -> to($data['email']);
	    			$message -> subject('韩都衣舍官方网站');
	    		});

	    		$mail = strstr($data['email'],'@');
                $mail = ltrim($mail,'@');
                return view('home.user.goemail',['mail'=>$mail]);
	    	}else
	    	{
	    		return back() -> with(['info' => '注册失败']);
	    	}
		}else
		{
		    //用户输入验证码错误
		    return back() -> with(['info' => '验证码不正确']);
		}
    	
    	
    }

    public function active($remember_token)
    {
    	$res = DB::table('users') -> where('rem_token',$remember_token) -> update(['status' => 1]);

    	if($res)
    	{
    		return redirect('home/user/login') -> with(['info' => '激活成功,请登录']);
    	}else
    	{
    		return '激活失败';    
    	}
    }
}
