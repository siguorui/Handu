<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class MyCenterController extends Controller
{
    
    public function MyCenter()
    {
        $id = Session('master') -> id;

        $data = DB::table('users') -> where('id',$id) -> first();
        
        $data1 = DB::table('user_details') -> where('uid',$data -> id) -> first();

        $data2 = DB::table('user_extra') -> where('uid',$data -> id) -> first();

        $data3 = DB::table('address') -> where('uid',$data -> id) -> first();

        // dd($data3);
    	return view('home.user.myCenter',['data' => $data,'data1' => $data1,'data2' => $data2,'data3' => $data3]);
    }

    public function details()
    {
        $id = Session('master') -> id;
        $data = DB::table('users') -> where('id',$id) -> first();
        
        $data1 = DB::table('user_details') -> where('uid',$data -> id) -> first();
        // dd($data1);
    	return view('home.user.details',['data' => $data,'data1' => $data1]);
    }

    public function password()
    {
    	return view('home.user.password');
    }

    public function updateP(Request $request)
    {
        
    	$this -> validate($request,[
            'old_password' => 'required',
    		'password' => 'required|confirmed',
    		],[
            'old_password.required' => '原密码不能为空',
			'password.required' => '密码不能为空',
    		'password.confirmed' => '确认密码不一致',
    		]);
    	$data = $request -> except('_token');
    	// dd($data);
    	$oldpasword = $data['old_password'];
    	$id = Session('master') -> id;
    	$res = DB::table('users') -> where('id',$id) -> first();

		$r = Hash::check($data['old_password'],$res -> password);
		$password = Hash::make($data['password']);

		if($r)
		{
			$ures = DB::table('users') -> where('id',$id) -> update(array('password' => $password));

			if($ures)
			{
				return redirect('/home/login') -> with(['info' =>'密码修改成功']); 
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
