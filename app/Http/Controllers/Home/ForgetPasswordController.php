<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Mail;
use Route;
class ForgetPasswordController extends Controller
{
    public function forgetPassword()
    {
        return view('home.forgetPassword.forgetPassword');
    }

    public function password()
    {
    	return view('home.forgetPassword.password');
    }

    public function changePassword(Request $request)
    {
    		 
	        $data = $request -> except('_token','act');
	      
	        $data1 = DB::table('users') -> where('email',$data['email']) -> first();
	        // dd($data1 ->email);
	        if($data1)
	        {
	            Mail::send('home.forgetPassword.forget',['data1' => $data1],
	                    function($message) use ($data1){
	                    $message -> to($data1->email);
	                    $message -> subject('韩都衣舍官方网站');
	                });

	                $mail = strstr($data1->email,'@');
	                $mail = ltrim($mail,'@');
	                return view('home.forgetPassword.goemail',['mail'=>$mail]);
	        }else
	        {
	            return back() -> with(['info' => '该账号不存在']);
	        }

    }   

   
    public function upassword($rem_token)
    {
    	return view('home.forgetPassword.password',['rem_token' => $rem_token]);
    	
    }

    public function upwd(Request $request)
    {
    	$data = $request -> except('_token','repassword');
    	// dd($data);
    	$newpassword = Hash::make($data['password']);
    	$res = DB::table('users') -> where('rem_token',$data['rem_token']) -> update(['password' => $newpassword]);
    	
        if($res)
    	{
    		return redirect('home/login') -> with(['info' => '密码修改成功,请登录']);
    	}else
    	{
    		return back() -> with(['info' => '密码修改失败']);    
    	}
    }
}
