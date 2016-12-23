<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //加载首页面
    public function index()
    {

    	//获取父级分类数据
    	// $fdata = DB::table('category') -> where([['pid','0'],['status','1'],]) -> get();
    	$data = DB::table('goods_list') -> where('cate_id',92) ->limit(5) -> get();
    	$data1 = DB::table('goods_list') -> where('cate_id',179) ->limit(5) -> get();
    	$data2 = DB::table('goods_list') -> where('cate_id',173) ->limit(5) -> get();
    	$data3 = DB::table('goods_list') -> where('cate_id',182) ->limit(5) -> get();
    	$data4 = DB::table('goods_list') -> where('cate_id',157) ->limit(5) -> get();
    	$data5 = DB::table('goods_list') -> where('cate_id',213) ->limit(5) -> get();
    	$res = DB::table('friendslinks') -> where('status',1)-> get();
    	// dd($data);



    	return view('home.index.index',['data' => $data,'data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4,'data5' => $data5,'res' => $res]);
    }
    public function search(Request $request)
    {
    	//分页家搜索
    	$num = $request -> input('num', 20);
    	$keywords = $request -> input('keywords','');
    	$data = DB::table('goods_list') -> where('title', 'like', '%'.$keywords.'%') -> paginate($num);

    	$fid = DB::table('goods_list') -> distinct() -> select('fid')-> where('title', 'like', '%'.$keywords.'%') -> get();

    	foreach ($fid as $k => $v) {
    		$res[] = DB::table('category') -> select('assit_logo')->where([['id',$v->fid],['status','1'],]) -> first()-> assit_logo;
    	}
    	
    	
        return view('home.search', ['data' => $data, 'res' => $res, 'request' => $request -> all()]);
    	// return view('home.search');

    }
}
