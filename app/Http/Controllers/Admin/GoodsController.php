<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
	//显示商品添加页
   	public function add($id)
   	{
   		$dataFirst = DB::table('category') -> where('id',$id) -> first();
   		return view('admin.goods.add',['dataFirst' => $dataFirst]);
   	}

   	//添加数据到数据库
   	public function insert(Request $request,$id)
   	{
   		$this -> validate($request,[
    		'title'=>'required',
    		'promt_price'=>'required|numeric|min:0',
    		'orign_price'=>'required|numeric|min:0',
    		'pic'=>'image',
    		],[
    		'title.required'=>'名称不能为空',
    		'promt_price.required'=>'现价不能为空',
    		'promt_price.min'=>'现价最小值为0',
    		'orign_price.min'=>'原价最小值为0',
    		'promt_price.numeric'=>'价格必须为一个数字',
    		'orign_price.required'=>'原价不能为空',
    		'orign_price.numeric'=>'价格必须为一个数字',
    		'pic.image'=>'不是一张合法的图片',
    		
    		]);

    	//$data['pid']传过来的名称为pid，真实值实际上是该条数据的id，很巧妙的用法
    	$data = $request -> except('_token','type');
    	$type = $request -> input('type');

    	if($type==1)
    	{
    		if($data['orign_price']>1)
    		{
    			$request -> flash();
    			return back()->with(['info'=>'折扣不能大于1']);
    		}
    	}

    	if($type==0)
    	{
    		$data['orign_price'] = $data['orign_price'];
    	}else
    	{
    		$data['orign_price'] =  (int) floor($data['promt_price']/$data['orign_price']);
    	}

    	if($request -> hasFile('pic'))
    	{
    		if($request -> file('pic') -> isValid())
    		{
    			$extension = $request -> file('pic')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/goods';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('pic')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['pic'] = $fileName;
    			}
    		}
    	}

    	$data['add_time'] = time();

    	$res = DB::table('goods_list') -> insert($data); 
    	if($res)
    	{ 
    		return redirect()->action('Admin\GoodsController@index',['id'=>$id])-> with(['info'=>'添加成功']);
    	}else
    	{
    		return back() -> with(['info'=>'添加失败']);
    	}

   	}

   	//商品展示

   	public function index(Request $request, $id)
   	{
   		$res = DB::table('category') -> where('id',$id) -> first();
   		
    	$num = substr_count($res->path, ',');
    		
		if($num == 2 )      //显示三级分类的商品
		{
			$data = DB::table('goods_list') -> where('cate_id',$id) -> get();

			//传urlid用于操作成功之后还能跳回
			return view('admin.goods.index',['data'=>$data,'num'=>$num,'urlid'=>$id]);

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

			// dd($data);
			return view('admin.goods.index',['data'=>$data,'num'=>$num,'urlid'=>$id]);

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

                        $num = $request -> input('num', 10);
                        $keyword = $request -> input('keyword','');
						$data[$key][$k] = DB::table('goods_list') -> where([['cate_id',$v->id],['title', 'like', '%'.$keyword.'%']]) -> paginate($num);
						
					}
					
				}

			}


			return view('admin.goods.index',['data'=>$data,'num'=>$num,'urlid'=>$id,'request' => $request -> all()]);
		}


   	}

   	public function edit($id,$urlid)
   	{
   		$data = DB::table('goods_list') -> where('id',$id) -> first();
   		 
   		$catedata = DB::table('category') -> select('id','path','title',DB::raw("concat(path,',',id) AS sort_str")) -> orderBy('sort_str') -> get();

   		foreach ($catedata as $key => $value) {
    		$num = substr_count($value->path, ',');
    		
			$str = str_repeat('|　　', $num+1);
			$value->title = $str.'|---'.$value->title;
			$value->num = $num;
	
    	}
    	// dd($catedata);
   		return view('admin.goods.edit',['data'=>$data,'catedata'=>$catedata,'urlid'=>$urlid]);
   	}

   	public function update(Request $request,$id,$urlid)
   	{
   		$this -> validate($request,[
    		'title'=>'required',
    		'promt_price'=>'required|numeric|min:0',
    		'orign_price'=>'required|numeric|min:0',
    		'pic'=>'image',
    		],[
    		'title.required'=>'名称不能为空',
    		'promt_price.required'=>'现价不能为空',
    		'promt_price.min'=>'现价最小值为0',
    		'orign_price.min'=>'原价最小值为0',
    		'promt_price.numeric'=>'价格必须为一个数字',
    		'orign_price.required'=>'原价不能为空',
    		'orign_price.numeric'=>'价格必须为一个数字',
    		'pic.image'=>'不是一张合法的图片',
    		
    		]);

    	//$data['pid']传过来的名称为pid，真实值实际上是该条数据的id，很巧妙的用法
    	$data = $request -> except('_token','type');
    	$type = $request -> input('type');

    	if($type==1)
    	{
    		if($data['orign_price']>1)
    		{
    			$request -> flash();
    			return back()->with(['info'=>'折扣不能大于1']);
    		}
    	}

    	if($type==0)
    	{
    		$data['orign_price'] = $data['orign_price'];
    	}else
    	{
    		$data['orign_price'] =  (int) floor($data['promt_price']/$data['orign_price']);
    	}

    	if($request -> hasFile('pic'))
    	{
    		if($request -> file('pic') -> isValid())
    		{
    			$extension = $request -> file('pic')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/goods';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('pic')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['pic'] = $fileName;
    			}
    		}
    	}

    	$data['add_time'] = time();

    	$res = DB::table('goods_list') -> where('id',$id) -> update($data); 

    	if($res)
    	{
    		return redirect()->action('Admin\GoodsController@index',['id'=>$urlid]);
    	}else
    	{
    		return back() -> with(['info'=>'更改失败']);
    	}

   	}

   	public function delete($id,$urlid)
   	{
   		$res = DB::table('goods_list') -> delete($id);
   		if($res)
    	{
    		return redirect()->action('Admin\GoodsController@index',['id'=>$urlid]);
    	}else
    	{
    		return back() -> with(['info'=>'删除失败']);
    	}
   	}

}
