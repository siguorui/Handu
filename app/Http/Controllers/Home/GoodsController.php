<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Cookie;

class GoodsController extends Controller
{
   
    //商品详情页面 
    public function goods($id)
    {
        $data = DB::table('goods_list') -> where('id', $id) -> first();
             // var_dump($data);die();
        $res = DB::table('attr_colors') -> where('gid', 1) -> get();
        // dd($res);
        $size = DB::table('attr_sizes') -> where('gid', 1) -> get();
        return view('home.goods.goods',['data' => $data,'res' => $res,'size' => $size]);
        // return view('home.shopingcart.goods');
    }

    //商品添加至购物车
    public function addCart(Request $request)
    {
    	$data = $request->all();
    	$cart[0] = $data;
    	
    	Cookie::queue('cart',$cart[0], 10);
    	Cookie::get('cart');
    	// var_dump($data);
    	
    	//返回0表示购物车添加成功，返回1表示添加失败(前台已做判断，后台没有判断)
    	return response() -> json(0);
    	// 二维的json [{"id":"1","size":"S","color":"\u6d45\u84dd\u8272","goodsNumber":"3"}]
    	// 一维的json
    	// {"id":"1","size":"M","color":"\u6d45\u84dd\u8272","goodsNumber":"3"}
    }

    public function checkStock(Request $request)
    {
    	$data = $request->all();
    	$res = DB::table('stock as st')
    			->join('attr_colors as c','st.cid','=','c.id')
    			->join('attr_sizes as s','st.sid','=','s.id')
    			->select('st.stock_num')
    			->where([['st.gid',$data['id']],['c.color',$data['color']],['s.size',$data['size']],])
    			->first();
    	return response() -> json($res->stock_num);
    }


    public function shopingcart()
    {

    	return view('home.goods.shopingcart');
    }
}
