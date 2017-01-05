<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{

    public function index(Request $request,$id)
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
        //商品列表遍历
       
        $order = $request -> input('order','id');
        $sequence = $request -> input('sequence','asc');

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
                $data = DB::table('goods_list')->get();
               
            }else
            {
                $tmpDate = DB::table('goods_list')->get();


                foreach ($tmpDate as $key => $value) {

                    $ymd = date('Ymd',$value->add_time);
                    if($ymd == $id)
                    {
                        $data[] = $value;
                    }
                }
               
            }
           
           return view('home.cate.index',['data'=>$data,'num'=>3,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum,'id'=>$id]);
        }

        
        
        $res = DB::table('category') -> where('id',$id) -> first();
        $num = substr_count($res->path, ',');   
        if($num == 2 )      //显示三级分类的商品
        {
            $data = DB::table('goods_list') -> where('cate_id',$id)-> orderBy($order, $sequence)-> paginate(16);

            //传urlid用于操作成功之后还能跳回

        }else if($num == 1)     //显示二级分类的商品
        {
            //获取二级分类的内容
            $secate = DB::table('category') -> where('pid',$id) -> get();

             $count = 0;
            foreach ($secate as $key => $value) {

                $d = DB::table('goods_list') -> where('cate_id',$value->id) -> orderBy($order, $sequence)->paginate(16);
               
                    $count += 1;
                    if($count==1){
                        $data = $d;
                    }else{
                       
                        foreach ($d as $k => $v) {  
                            $data[]=$v;
                        } 
                    }
               

            }


        }else if($num == 0)     //显示一级分类的商品
        {
            $data = DB::table('goods_list') -> where('fid',$id) -> orderBy($order, $sequence)->paginate(16);

        }

        return view('home.cate.index',['data'=>$data,'num'=>$num,'fdata'=>$fdata,'data1'=>$data1,'data2'=>$data2,'datenum'=>$datenum,'id'=>$id,'request' => $request -> all()]);

    }

    public function goodsList($id)
    {

        $data = DB::table('category') -> where([['id',$id],['status','1']]) -> first();
        // dd($data);

        
            $data1 = DB::table('category') -> where([['pid',$data->id],['status','1'],]) -> get();
            // dd($data1);
            foreach ($data1 as $key => $value) {
                $data2[] = DB::table('category') -> where([['pid',$value->id],['status','1'],]) -> get();
                
                // $num = 6;
                foreach ($data2[$key] as $kk => $vv){
                   
                    $res[] = DB::table('goods_list') -> where('cate_id',$vv->id) ->paginate(6);
                    
                }

            }

            // dd($v);
            // dd($data2);
            // dd($res);
        return view('home.nana.nana',['data' => $data,'data1' => $data1,'data2' => $data2,'res' => $res]);
        
       // $num = $request -> input('num', 10);
       // $data = DB::table('goods_list') -> where('user_name', 'like', '%'.$keyword.'%') -> paginate($num);
    }


    public function ajaxupdate(Request $request)
    {
        $data = $request -> all();
        $id = $data['id'];

        $data = DB::table('goods_list') -> where('cate_id',$id) -> get();
        
        return response()->json($data);

    }
}
