<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
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
        $col = DB::table('carsoul') -> get();

        $data6 = DB::table('category') -> where('pid',0) -> limit(9) -> get();
        $data7 = DB::table('category') -> where([['pid',0],['id', '>=','10']]) -> limit(9) -> get();
        $data8 = DB::table('category') -> where([['pid',0],['id', '>=','19']]) -> get();
        $data9 = DB::table('fashion_wdress') -> get();

        foreach($data9 as $key => $value)
        {
            $data10[$key] = DB::table('category') -> where('pid',$value->sid) -> get();
        }
        $data11 = DB::table('category') -> where('state',1) -> get();

        $data12 = DB::table('category') -> where('state',2) -> get();

        foreach($data12 as $key => $value)
        {
            $data13[$key] = DB::table('category') -> where('pid',$value->id) -> get();
            foreach($data13 as $k => $v){
                
            }
            $dd[] = $v[0];
            
        }
        foreach($dd as $key => $value)
        {
            $data14[] = DB::table('category') -> where('pid',$value ->id) -> get();
        }
        $data15 = DB::table('category') -> where('state',3) -> get();
        $data16 = DB::table('category') -> where('pid',7) -> get();
        $d1[] = $data16[0];
        $data17 = DB::table('category') -> where('pid',45) -> get();
        // dd($d1);
        // dd($data17);
        Session::set('index', $data6);
        Session::set('index1', $data7);
        Session::set('index2', $data8);
        Session::set('index3', $data9);
        Session::set('index4', $data10);
        Session::set('index5', $data11);
        Session::set('index6', $data12);
        Session::set('index7', $data14);
        Session::set('index8', $data15);
        Session::set('index9', $data17);

        // dd(Session::get('index7'));
    	return view('home.index.index',['data' => $data,'data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4,'data5' => $data5,'res' => $res,'col'=>$col]);

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
