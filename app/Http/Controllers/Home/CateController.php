<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{

    public function index()
    {
    	//获取父级分类数据
    	$data = DB::table('category') -> where([['pid','0'],['status','1'],]) -> get();

    	//获取第二季分类数据
    	foreach ($data as $k => $v) {
    		$data1[$k] = DB::table('category') -> where([['pid',$v->id],['status','1'],]) -> get();

    		foreach ($data1[$k] as $key => $value) {
    			$data2[$k][$key] = DB::table('category') -> where([['pid',$value->id],['status','1'],]) -> get();
    		}
    	}

    	//前端代码实现按如下格式
    	// foreach ($data as $k1 => $v1) {
    	// 	echo $v1 -> title."<br/>";  //获取父级title

    	// 	foreach ($data1[$k1] as $k2 => $v2) {
    	// 		echo "---".$v2 -> title."<br/>";
    	// 		foreach ($data2[$k1][$k2] as $k3 => $v3) {
    	// 			echo "------".$v3 -> title."<br/>";
    	// 		}
    	// 	}
    	// }
    	// die;
    	
    	return view('home.cate.index',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }
}
