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
             // var_dump($data);die();
        $res = DB::table('attr_colors') -> where('gid', $id) -> get();

        //获取位置信息
        $pid = DB::table('category')->where('id',$data->cate_id)->first();
        $position['one'] = DB::table('category')->where('id',$data->fid)->first()->title;
        $position['two'] = DB::table('category')->where('id',$pid->pid)->first()->title;
        $position['three'] = $pid->title;
        $position['four'] = $data->title;

        //获取类别
        $category = DB::table('category') -> where('pid',$pid->pid)->get();
        
        //新品上市
        $new_goods = DB::table('goods_list') -> where('cate_id',$data->cate_id) -> orderBy('add_time', 'desc')->limit(5)->get();
        

        $size = DB::table('attr_sizes') -> where('gid', $id) -> get();
        return view('home.goods.goods',['data' => $data,'res' => $res,'size' => $size,'position'=>$position,'category'=>$category,'new_goods'=>$new_goods]);
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
        $tmp['uid'] = Session('master') -> id;

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
            return response() -> json(0);
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

            $address = DB::table('address') -> where('uid',$uid) -> get();
        }

        
        $data = $request->all();
        $cartData = Cookie::get('cartGoods1');
        $num = 0;
        $total = 0;
        $gnumber = 0;

        foreach ($data["recId"] as $key => $value) {
            # code...
            
            $order[$num]["id"] = $cartData[$value]['id'];
            $order[$num]["size"] = $cartData[$value]['size'];
            $order[$num]["color"] = $cartData[$value]['color'];
            
            $order[$num]["number"] = $data["goods_number"][$key];
            $gnumber += $order[$num]["number"];
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
       return view("home.order.order",['order'=>$order,'total'=>$total,'address'=>$address,'gnumber'=>$gnumber]);
    }


    public function buy_now(Request $request)
    {

        if(!$request->session()->has('master'))
        {
            return back() -> with('info','请先登录');
        }else
        {
            $uid = $request->session()->get('master')->id;
            $address = DB::table('address') -> where('uid',$uid) -> get();
        }

        $data = $request->all();
        $order[0]['id'] = $data['recId']; 
        $order[0]['color'] = $data['color']; 
        $order[0]['size'] = $data['size'];
        $order[0]["number"] = $data['goods_number'];
        $gnumber = $data['goods_number'];

         $res = DB::table('goods_list as g')
                    -> leftJoin('category as c','g.fid','=','c.id')
                    -> select('g.*','c.title as brand')
                    -> where('g.id',$data['recId'])->first();

        $order[0]["title"] = $res->title;
        $order[0]["orign_price"] = $res->orign_price;
        $order[0]["promt_price"] = $res->promt_price;
        $order[0]["pic"] = $res->pic;
        $order[0]["brand"] = $res->brand;
        $order[0]["smtotal"] = $order[0]["number"]*$order[0]["promt_price"];
        $total = $order[0]["smtotal"];

        return view("home.order.order",['order'=>$order,'total'=>$total,'address'=>$address,'gnumber'=>$gnumber]);
           
    }

}
