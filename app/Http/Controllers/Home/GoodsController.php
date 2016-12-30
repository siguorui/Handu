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
        $res = DB::table('attr_colors') -> where('gid', $id) -> get();
        // dd($res);
        $size = DB::table('attr_sizes') -> where('gid', $id) -> get();
        return view('home.goods.goods',['data' => $data,'res' => $res,'size' => $size]);
        // return view('home.shopingcart.goods');
    }

    //商品添加至购物车
    public function addCart(Request $request)
    {
    	$data = $request->all();
    	
            
    		$res = Cookie::get('cartGoods1');
    		// dd('111');
    		if(empty($res))
            {
        		$cartGoods[0] = $data;
        		Cookie::queue("cartGoods1",$cartGoods);
               
	       }else
           {
                $cartGoods = Cookie::get('cartGoods1');

                if(!in_array($data, $cartGoods))
                {
                    array_push($cartGoods, $data);
                }

                // cookie存到会话结束
                Cookie::queue('cartGoods1',$cartGoods);  
           }
    		

    	$cart = Cookie::get('cartGoods1');
    	Cookie::queue('cart',$cart, 1440);   //cookie存24小时
    	// $res[0] = Cookie::get('cart');
    	// var_dump($data);
    	// dd($res);

    	//返回0表示购物车添加成功，返回1表示添加失败(前台已做判断，后台没有判断)
    	return response() -> json('0');
    	
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
       
         //修改后
        $cartData = Cookie::get('cartGoods1');
        $total = 0;
        $num = 0;

        // 获取当前会话的cookie
        foreach ($cartData as $key => $value) {
            $data[$key] = DB::table('goods_list as g')
                        -> leftJoin('category as c','g.fid','=','c.id')
                        -> select('g.*','c.title as brand')
                        -> where('g.id',$value['id'])->first();
            $num += $value['goodsNumber'];
            $total += $value['goodsNumber'] * $data[$key]->promt_price;
        }
        
        
        //获取长期保存的商品cookie值
        $cart = Cookie::get('cart');
        foreach ($cart as $k => $v) 
        {
            $keepData[$k] = DB::table('goods_list')-> where('id',$v['id'])->first();
        }

        return view('home.goods.shopingcart',['cartData'=>$cartData,'data'=>$data,'num'=>$num,'total'=>$total,'keepData'=>$keepData]);
    }

    public function deleteCart(Request $request)
    {
        $data = $request->all();
        $cartData = Cookie::get('cartGoods1');
        unset($cartData[$data['id']]);
        Cookie::queue('cartGoods1',$cartData);

        $num = 0;
        $total = 0;

        foreach ($cartData as $key => $value) {
            $data[$key] = DB::table('goods_list as g')
                        -> leftJoin('category as c','g.fid','=','c.id')
                        -> select('g.*','c.title as brand')
                        -> where('g.id',$value['id'])->first();
            $num += $value['goodsNumber'];
            $total += $value['goodsNumber'] * $data[$key]->promt_price;
        }
        array_shift($data);
        $data['num'] = $num;
        $data['total'] = $total;

        array_pop($data);
        dd($data);
    }

}
