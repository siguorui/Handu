<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    //列表页
    public function index(Request $request)
    {
    	//搜索加分页
        $num = $request -> input('num', 10);
        $keyword = $request -> input('keyword','');
        $data = DB::table('goods_orders as c3') 
        	 ->leftjoin('goods_list as c1', 'c3.gid', '=', 'c1.id')
        	 -> select('c3.*','c1.title')
        	 -> where([['c3.order_state','!=', '3'],['order_num', 'like', '%'.$keyword.'%']]) -> paginate($num);
        return view('admin.orders.index', ['data' => $data, 'request' => $request -> all()]);
    	// return view('admin.orders.index');
    }
    //订单详情页
    public function details($id)
    {
    	$data = DB::table('goods_orders as c3') 
        	 ->leftjoin('users as c1', 'c3.uid', '=', 'c1.id')
        	 ->leftjoin('address as c2', 'c1.id', '=', 'c2.uid')
        	 -> select('c3.*','c3.id as oid','c3.id as oid','c1.email','c2.*')
        	 -> where([['c2.state','=', '1'],['c3.order_state','!=', '3'],['c3.id', $id]]) ->get();
        foreach($data as $k => $v)
        {
        	$res = DB::table('goods_list') -> where('id', $v->gid) -> first();
        	$v -> title = $res -> title;

        }
    	return view('admin.orders.details',['data' => $data]);
    }

    //完成的订单
    public function finish(Request $request)
    {
    	//搜索加分页
        $num = $request -> input('num', 10);
        $keyword = $request -> input('keyword','');
        $data = DB::table('goods_orders as c3') 
        	 ->leftjoin('goods_list as c1', 'c3.gid', '=', 'c1.id')
        	 -> select('c3.*','c1.title')
        	 -> where([['c3.order_state','=', '3'],['order_num', 'like', '%'.$keyword.'%']]) -> paginate($num);
        return view('admin.orders.finish', ['data' => $data, 'request' => $request -> all()]);
    	// return view('admin.orders.index');
    }

    public function detailsfinish($id)
    {
    	$data = DB::table('goods_orders as c3') 
        	 ->leftjoin('users as c1', 'c3.uid', '=', 'c1.id')
        	 ->leftjoin('address as c2', 'c1.id', '=', 'c2.uid')
        	 -> select('c3.*','c3.id as oid','c3.id as oid','c1.email','c2.*')
        	 -> where([['c2.state','=', '1'],['c3.order_state','=', '3'],['c3.id', $id]]) ->get();
        foreach($data as $k => $v)
        {
        	$res = DB::table('goods_list') -> where('id', $v->gid) -> first();
        	$v -> title = $res -> title;

        }
    	return view('admin.orders.detailsfinish',['data' => $data]);
    }

    public function edit($id)
    {
    	$data = DB::table('goods_orders') -> where('id',$id) -> first();
    	return view('admin.orders.edit',['data' => $data]);
    }
    public function update(Request $request, $id)
    {
    	$data = $request -> except('_token');
    	$res = DB::table('goods_orders') -> where('id', $id) -> update($data);
    	if($res)
    	{
    		return redirect('/admin/orders/index') -> with(['info' => '更新成功']);
        }else
        {
            return back() -> with(['info' => '更新失败']);
        }
        return view('admin.orders.index');
    }
    //删除完成订单
    public function delete($id)
    {
    	$data = DB::table('goods_orders') ->where('id', $id) ->delete();
    	if($data)
        {
            return redirect('admin/orders/finish') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
    }
}
