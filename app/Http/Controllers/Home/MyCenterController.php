<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
class MyCenterController extends Controller
{
    
    public function MyCenter()
    {
        $id = Session('master') -> id;

        $data = DB::table('users') -> where('id',$id) -> first();
        
        $data1 = DB::table('user_details') -> where('uid',$data -> id) -> first();

        $data2 = DB::table('user_extra') -> where('uid',$data -> id) -> first();

        $data3 = DB::table('address') -> where('uid',$data -> id) -> first();

        $data4 = DB::table('goods_collection') -> where('uid',$id) -> get();
        // dd($data4);
        if(count($data4) != 0)
        {
            foreach($data4 as $k => $v){

                $data5[$k] = DB::table('goods_list') ->where('id',$v->gid) -> first();
            }
            return view('home.user.myCenter',['data' => $data,'data1' => $data1,'data2' => $data2,'data3' => $data3,'data5' => $data5]);
        }else
        {
            return view('home.user.myCenter',['data' => $data,'data1' => $data1,'data2' => $data2,'data3' => $data3,]);
        }
        
    	

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
    public function myOrders(Request $request)
    {

        $id = Session::get('master') -> id;
        // dd($id);
        //搜索
        $keyword = $request -> input('keyword','');
        $data = DB::table('goods_orders as c3') 
             ->leftjoin('users as c1', 'c3.uid', '=', 'c1.id')
             ->leftjoin('address as c2', 'c3.aid', '=', 'c2.id')
             -> select('c3.*','c3.id as oid','c1.email','c2.*')
             -> where([['c3.uid', $id],['order_num', 'like', '%'.$keyword.'%']]) -> get();
        
        foreach($data as $k => $v)
        {
            date_default_timezone_set('PRC');
            $res = DB::table('goods_list') -> where('id', $v->gid) -> first();
            $v -> title = $res -> title;
            $v -> promt_price = $res -> promt_price;
            $v -> order_time = date('Y-m-d H:i',$v -> order_time);
        }
        // dd($data);
        $num = count($data);
        // dd($num);
        return view('home.orders.myOrders', ['data' => $data,'num' => $num, 'request' => $request -> all()]);
    }
    

    public function ue($id)
    {
        return view('home.orders.ue',['id'=>$id]);
    }

    public function insert(Request $request,$id)
    {

        $data = $request -> except('_token');
        $res = DB::table('goods_orders') -> where('id',$id) -> first();
        $data['uid'] = $res -> uid;
        $data['gid'] = $res -> gid;
        $data['oid'] = $res -> id;
        $time = time();
        $data['comment_time'] = $time;
        $ins = DB::table('goods_comments') -> insert($data);
        if($ins)
        {
            return redirect('/home/orders/myOrders') -> with(['info' => '添加成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }
        

        // return view('home.orders.ue',['data' => $data]);

    }


}
