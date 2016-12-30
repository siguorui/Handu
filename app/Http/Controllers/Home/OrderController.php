<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Cookie;

class OrderController extends Controller
{
    public function add_address(Request $request)
    {
    	
    	$this -> validate($request,[
            'to_name' => 'required',
            'phone' => 'required|min:11|max:11',
            'addr_deta' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required'
            ],[
            'to_name.required' => '请填写收货人姓名',
            'phone.min' => '手机号码格式不正确',
            'phone.max' => '手机号码格式不正确',
            'phone.required' => '请填写手机号码',
            'addr_deta.required' => '请填写详细地址',
            'province.required' => '请选择省份',
            'city.required' => '请选择城市',
            'district.required' => '请选择县区'
            ]);

        $id = Session('master') -> id;
        $data1 = $request -> except('_token');
        $data = $request -> except('_token','province','city','district');
        $data['addr_area'] = $data1['province'].' '.$data1['city'].' '.$data1['district'];
        $data['addr_deta'] = $data1['addr_deta'];    
        $data['uid'] = $id;
        // dd($data);
        // 
        if(isset($data['state']) && $data['state'] == 1)
        {
        	DB::table('address')->update(['state'=>0]);
        }else 
        {
        	$data['state'] = 0;
        }
        

        $res = DB::table('address')  -> insert($data);
        if($res)
        {
        	$result = DB::table('address') -> where('uid',$data['uid']) -> get();
       		// dd($result);
            return response() -> json($result);
        }else
        {
            return response() -> json(1);
        }

    }

    public function del_address(Request $request)
    {
    	$id = $request->input('address_id');
    	
    	$res = DB::table('address')  -> delete(['id'=>$id]);
    	if($res)
    	{
    		return response() -> json(0);
    	}else
    	{
    		return response() -> json(1);
    	}
    }

    public function edit_address(Request $request)
    {
    	$id = $request->input('id');
    	$data2 = DB::table('address') -> where('id',$id) -> first();
        $str = ($data2 ->addr_area);
        $arr = explode(" ",$str);

        $province = $arr[0];
        $city = $arr[1];
        $district = $arr[2];
        
        $data2->province = $province;
        $data2->city = $city;
        $data2->district = $district;
        // dd($data2);
        return response() -> json($data2);

    }

    public function update_address(Request $request)
    {

    	
    	$this -> validate($request,[
            'to_name' => 'required',
            'phone' => 'required|min:11|max:11',
            'addr_deta' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required'
            ],[
            'to_name.required' => '请填写收货人姓名',
            'phone.min' => '手机号码格式不正确',
            'phone.max' => '手机号码格式不正确',
            'phone.required' => '请填写手机号码',
            'addr_deta.required' => '请填写详细地址',
            'province.required' => '请选择省份',
            'city.required' => '请选择城市',
            'district.required' => '请选择县区'
            ]);

        
        $data1 = $request -> except('_token','id');
       	$id = $request -> input('id');
        $data['addr_area'] = $data1['province'].' '.$data1['city'].' '.$data1['district'];
        $data['addr_deta'] = $data1['addr_deta'];    
        $data['to_name'] = $data1['to_name'];
        $data['phone'] = $data1['phone'];
        $uid = Session('master') -> id;
		$data['uid'] = $uid;
		
        // dd($data);
        // 
        if(isset($data1['state']) && $data1['state'] == 1)
        {
        	$data['state'] = $data1['state'];
        	DB::table('address')->update(['state'=>0]);
        }else 
        {
        	$data['state'] = 0;
        }
        
        
        $res = DB::table('address')  -> where('id',$id) -> update($data);
        if($res)
        {
        	$result = DB::table('address') -> where('uid',$data['uid']) -> get();
       		// dd($result);
            return response() -> json($result);
        }else
        {
            return response() -> json(1);
        }

    }

    public function submit_order(Request $request)
    {

    	$data = $request->except('_token');
  
		if(count($data['gid'])==0){
			return back() -> with(['info'=>'没有选中的商品订单']);
		}

		//清除cookie为什么不起作用
		// Cookie::queue('cartGoods1', null , -1); // 销毁
		// Cookie::forget('cartGoods1');
		$order_num = date('Ymd',time()).rand(10000,99999);

		$total = 0;

		foreach ($data['gid'] as $key => $value) {
			$order['gid'] = $value;
			$order['size'] = $data['size'][$key];
			$order['color'] = $data['color'][$key];
			$order['num'] = $data['num'][$key];
			$order['message'] = $data['message'];
			$order['pay'] = $data['pay'];
			$order['deliver_time'] = $data['deliver_time'];
			$order['deliver'] = $data['deliver'];
			$order['order_time'] = time();
			$order['uid'] = Session('master') -> id;
			$order['order_num'] = $order_num;
			$order['order_type'] = 0;
			$order['order_state'] = 0;
			DB::table('goods_orders')->insert($order);
			$total += DB::table('goods_list') ->select('promt_price')-> where('id',$value)->first()->promt_price * $order['num'];

		}

		
		$pay['total'] = $total;
		$pay['order_num'] = $order_num;
		$pay['pay'] = $data['pay'];
		$pay['deliver'] = $data['deliver'];;
		// $pay['id'] = $data['gid'];
		

		return view('home.order.pay',['pay'=>$pay]);
    	
    }


    public function pay_now(Request $request)
    {
    	$order_num = $request->input('order_num');
    	$res = DB::table('goods_orders')->where('order_num',$order_num)->update(['order_state'=>'1']);
    	// if($res)
    	// {
    		$data = DB::table('goods_orders')->where('order_num',$order_num)->get();
    		// dd($data);
    		foreach ($data as $key => $value) {
	            $result = DB::table('stock as st')
	    			->join('attr_colors as c','st.cid','=','c.id')
	    			->join('attr_sizes as s','st.sid','=','s.id')
	    			->select('st.stock_num','st.id')
	    			->where([['st.gid',$value->gid],['c.color',$value->color],['s.size',$value->size],])
	    			->first();

	    		//判断该商品是否有库存
    			if(!isset($result->stock_num) || $result->stock_num<=0)
    			{
    				return back() -> with(['info'=>'该商品没有库存']);
    			}else 
    			{
    				$new_stock = $result->stock_num - $value->num;
    				if($new_stock<0)
    				{
    					return back() -> with(['info'=>'库存不足']);
    				}

    				//更新库存
    				DB::table('stock') -> where('id',$result->id) -> update(['stock_num'=>$new_stock]);

    				//增加商品的销量
    				
    				$count = DB::table('goods_list') -> where('id',$value->gid) ->first()->count;
    				$count = $count + $value->num;
    				DB::table('goods_list')->where('id',$value->gid)->update(['count'=>$count]);

    			}
    		
        	}

    }




}
