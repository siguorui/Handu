<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Cookie;
use Session;


class GoodsController extends Controller
{
   	

    //商品详情页面 
    public function goods($id)
    {
        $data = DB::table('goods_list') -> where('id', $id) -> first();
        // dd($data);
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

        if($cart){
            foreach ($cart as $k => $v) 
            {
                $keepData[$k] = DB::table('goods_list')-> where('id',$v['id'])->first();
            }
        }else{
            foreach ($cartData as $k => $v) 
            {
                $keepData[$k] = DB::table('goods_list')-> where('id',$v['id'])->first();
            }
        }

        return view('home.goods.shopingcart',['cartData'=>$cartData,'data'=>$data,'num'=>$num,'total'=>$total,'keepData'=>$keepData]);
    }

    public function removeToCollect(Request $request)
    {
        if (!$request->session()->has('master')) { 
            return response() -> json(0);
        }

        $data = $request->all();
        $cartData = Cookie::get('cartGoods1');

        $tmp['size'] = $cartData[$data['id']]['size'];
        $tmp['color'] = $cartData[$data['id']]['color'];
        $tmp['gid'] = $cartData[$data['id']]['id'];
        $tmp['num'] = $data['number'];
        $tmp['collect_time'] = time();
        $tmp['uid'] = 2;

        //判断商品是否已添加过收藏夹
        $ret = DB::table('goods_collection')->where([['size',$tmp['size']],['color',$tmp['color']],['gid',$tmp['gid']],['uid',$tmp['uid']],['num',$tmp['num']],])->first();
        if($ret)
        {
            return response() -> json(2);
        }

        //
        $res = DB::table('goods_collection')->insert($tmp);
        
        if($res)
        {
            return response() -> json(1);
        }else 
        {
            return response() -> json(3);
        }

    }

    public function toPay(Request $request)
    {
        if(!$request->session()->has('master'))
        {
            return back() -> with('info','请先登录');
        }else
        {
            $uid = $request->session()->get('master')->id;
            $address = DB::table('address') -> where([['uid',$uid],['state',1]]) -> first();
        }

        
        $data = $request->all();
        $cartData = Cookie::get('cartGoods1');
        $num = 0;
        $total = 0;

        foreach ($data["recId"] as $key => $value) {
            # code...
            
            $order[$num]["id"] = $cartData[$value]['id'];
            $order[$num]["size"] = $cartData[$value]['size'];
            $order[$num]["color"] = $cartData[$value]['color'];
            
            $order[$num]["number"] = $data["goods_number"][$key];
             
            $res = DB::table('goods_list as g')
                    -> leftJoin('category as c','g.fid','=','c.id')
                    -> select('g.*','c.title as brand')
                    -> where('g.id',$cartData[$value]['id'])->first();

            $order[$num]["title"] = $res->title;
            $order[$num]["orign_price"] = $res->orign_price;
            $order[$num]["promt_price"] = $res->promt_price;
            $order[$num]["pic"] = $res->pic;
            $order[$num]["brand"] = $res->brand;
            $order[$num]["smtotal"] = $order[$num]["number"]*$order[$num]["promt_price"];
            $total += $order[$num]["smtotal"];
            $num += 1;

        }
        // dd($order);
       return view("home.order.order",['order'=>$order,'total'=>$total,'address'=>$address]);
    }

}
