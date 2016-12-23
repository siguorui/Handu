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
    	
    	
    	
    	

    		$cartGoods = $data;
    		Cookie::queue('cartGoods1',$cartGoods,10);
    		// $res = Cookie::get('cartGoods1');
    		// dd('111');
    		// 
    		// 
    		
    		// $cartGoods = $data;
    		// Cookie::queue($num,$cartGoods);

    	
    		// $cartGoods = Cookie::get('cartGoods1');

    		// array_push($cartGoods, $data);
    		
    		// Cookie::queue('cartGoods1',$cartGoods);	

    	

    	// dd(count(Cookie::get('cartGoods1'))) ;

    	// dd($cartGoods);
    	// dd(Cookie::get('cartGoods1')); 
    	
    		
    	

    	$cart[0] = $data;
    	Cookie::queue('cart',$cart[0], 10);
    	// $res[0] = Cookie::get('cart');
    	// var_dump($data);
    	// dd($res);

    	//返回0表示购物车添加成功，返回1表示添加失败(前台已做判断，后台没有判断)
    	return response() -> json('0');
    	// 二维的json [{"id":"1","size":"S","color":"\u6d45\u84dd\u8272","goodsNumber":"3"}]
    	// 一维的json
    	// {"id":"1","size":"M","color":"\u6d45\u84dd\u8272","goodsNumber":"3"}
    	// 
    	// 
//     	{"id":"1","size":"S","color":"\u6d45\u84dd\u8272","goodsNumber":"1","0":{"id":"1","size":"S","color"
// :"\u6d45\u84dd\u8272","goodsNumber":"1"},"1":{"id":"1","size":"S","color":"\u6d45\u84dd\u8272","goodsNumber"
// :"1"},"2":{"id":"1","size":"S","color":"\u6d45\u84dd\u8272","goodsNumber":"1"}}
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
    	$cartData = Cookie::get('cartGoods1');
		$data = DB::table('goods_list')-> where('id',$cartData['id'])->first();

		$cartData['total'] = $cartData['goodsNumber'] * $data->promt_price;
		
    	return view('home.goods.shopingcart',['cartData'=>$cartData,'data'=>$data]);
    }
}
