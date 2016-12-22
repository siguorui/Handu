<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
}
