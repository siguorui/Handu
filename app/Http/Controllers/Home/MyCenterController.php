<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class MyCenterController extends Controller
{
    //
    public function MyCenter()
    {
    	return view('home.user.myCenter');
    }

    public function details()
    {
    	return view('home.user.details');
    }

    public function password()
    {
    	return view('home.user.password');
    }

    public function update(Request $request)
    {
    	$this -> validate($request,[
    		'password' => 'required|confirmed',
    		],[
			'password.required' => '密码不能为空',
    		'password.confirmed' => '确认密码不一致',
    		]);
    	$data = $request -> except('_token');
    	
    	$oldpasword = $data['old_password'];
    	
    	$res = DB::table('users') -> where('id','23') -> first();

		$r = Hash::check($data['old_password'],$res -> password);
		$password = Hash::make($data['password']);

		if($r)
		{
			$ures = DB::table('users') -> where('id','23') -> update(array('password' => $password));

			if($ures)
			{
				return redirect('登录页面'); 
			}else
			{
				return back() -> with(['info' => '修改密码失败']);
			}

		}else
		{
			return back() -> with(['info' => '原密码不正确']);
		}
    }
}
