<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{

    public function index($id)
    {
    	//获取父级分类数据
    	$fdata = DB::table('category') -> where([['pid','0'],['status','1'],]) -> get();

    	//获取第二季分类数据
    	foreach ($fdata as $k => $v) {
    		$data1[$k] = DB::table('category') -> where([['pid',$v->id],['status','1'],]) -> get();

    		foreach ($data1[$k] as $key => $value) {
    			$data2[$k][$key] = DB::table('category') -> where([['pid',$value->id],['status','1'],]) -> get();
                foreach($data2[$k][$key] as $kt=>$vt){

                    //遍历获取对应cate_id的商品数量，并增加一个共有属性存进去
                    $vt->goods_num = DB::table('goods_list')->select(DB::raw('count(*) as goods_num '))->where('cate_id',$vt->id)->first()->goods_num;
                }
                
    		}
    	}

        //前端代码实现按如下格式
        // foreach ($data as $k1 => $v1) {
        //  echo $v1 -> title."<br/>";  //获取父级title

        //  foreach ($data1[$k1] as $k2 => $v2) {
        //      echo "---".$v2 -> title."<br/>";
        //      foreach ($data2[$k1][$k2] as $k3 => $v3) {
        //          echo "------".$v3 -> title."<br/>";
        //      }
        //  }
        // }
        // die;

        //获取每日新品的类别
        $dateGoods = DB::table('goods_list')->distinct()->select('add_time')->get();

        foreach ($dateGoods as $key => $value) {
            $ymd = date('Ymd',$value->add_time);

            if($key == 0)
            {
                $datenum[0] = $ymd;
               
            }

            if(!in_array($ymd, $datenum))
            {
                $datenum[] = $ymd;
            }

        }
        

    	if(strlen($id)==8)
        {
            if($id == '10000000')
            {
                $dateData = DB::table('goods_list')->get();
            }else
            {
                $tmpDate = DB::table('goods_list')->get();

                foreach ($tmpDate as $key => $value) {

                    $ymd = date('Ymd',$value->add_time);
                    if($ymd == $id)
                    {
                        $dateData[] = $value;
                    }
                }
            }

            return view('home.cate.index',['dateData'=>$dateData,'num'=>3,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum]);
        }
    	
        //商品列表遍历
        $res = DB::table('category') -> where('id',$id) -> first();
        
        $num = substr_count($res->path, ',');
            
        if($num == 2 )      //显示三级分类的商品
        {
            $data = DB::table('goods_list') -> where('cate_id',$id) -> get();

            //传urlid用于操作成功之后还能跳回
           

            return view('home.cate.index',['data'=>$data,'num'=>$num,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum]);

        }else if($num == 1)     //显示二级分类的商品
        {
            //获取二级分类的内容
            $secate = DB::table('category') -> where('pid',$id) -> get();

            foreach ($secate as $key => $value) {

                $d = DB::table('goods_list') -> where('cate_id',$value->id) -> get();
                if(count($d)!=0)
                {
                    $data[] = $d;
                }

            }

            return view('home.cate.index',['data'=>$data,'num'=>$num,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum]);

        }else if($num == 0)     //显示一级分类的商品
        {
            //二级分类
            $fircate = DB::table('category') -> where('pid',$id) -> get();

            //遍历取出三级分类
            foreach ($fircate as $key => $value) {

                $d[$key] = DB::table('category') -> where('pid',$value->id) -> get();

                if(count($d[$key])!=0)
                {
                    foreach ($d[$key] as $k => $v) {

                        $data[$key][$k] = DB::table('goods_list') -> where('cate_id',$v->id) -> get();
                        
                    }
                    
                }

            }

            return view('home.cate.index',['data'=>$data,'num'=>$num,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum]);
        }

    }

}
