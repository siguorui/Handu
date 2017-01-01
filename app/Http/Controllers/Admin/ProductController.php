<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    public function add()
    {
    	$catedata = DB::table('category') -> select('id','path','title',DB::raw("concat(path,',',id) AS sort_str")) -> orderBy('sort_str') -> get();

   		foreach ($catedata as $key => $value) {
    		$num = substr_count($value->path, ',');
    		
			$str = str_repeat('|　　', $num+1);
			$value->title = $str.'|---'.$value->title;
			$value->num = $num;
	
    	}

    	return view('admin.product.add',['catedata'=>$catedata]);
    }

    //添加数据到数据库
   	public function insert(Request $request)
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

    	$data['fid'] = DB::table('category as c1')
    		->leftJoin('category as c2','c1.pid','=','c2.id')
    		->select('c2.pid')
    		->where('c1.id',$data['cate_id'])->first()->pid;

    	$res = DB::table('goods_list') -> insert($data); 
    	if($res)
    	{ 
    		return redirect('/admin/product/index')-> with(['info'=>'添加成功']);
    	}else
    	{
    		return back() -> with(['info'=>'添加失败']);
    	}

   	}

   	//商品列表
   	public function index(Request $request)
   	{
   		$pageNum = $request -> input('pageNum', 10);
        $keyword = $request -> input('keyword','');

        $data = DB::table('goods_list') ->where('title', 'like', '%'.$keyword.'%') ->orderBy('add_time', 'desc')->paginate($pageNum);
        return view('admin.product.index',['data'=>$data,'request' => $request -> all()]);
   	}

   	public function edit($id)
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
   		return view('admin.product.edit',['data'=>$data,'catedata'=>$catedata]);
   	}

   	public function update(Request $request,$id)
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

        $data['fid'] = DB::table('category as c1')
            ->leftJoin('category as c2','c1.pid','=','c2.id')
            ->select('c2.pid')
            ->where('c1.id',$data['cate_id'])->first()->pid;

    	$res = DB::table('goods_list') -> where('id',$id) -> update($data); 

    	if($res)
    	{

    		return redirect('/admin/product/index')-> with(['info'=>'更改成功']);
    	}else
    	{
    		return back() -> with(['info'=>'更改失败']);
    	}

   	}

   	public function delete($id)
   	{
   		$res = DB::table('goods_list') -> delete($id);
   		if($res)
    	{
    		return redirect('/admin/product/index')-> with(['info'=>'删除成功']);
    	}else
    	{
    		return back() -> with(['info'=>'删除失败']);
    	}
   	}

   	public function addStock(Request $request)
   	{
  
   		$data = $request->all();
   		$sid = DB::table('attr_sizes')->insertGetId(['gid'=>$data['id'],'size'=>$data['size']]);
   		$cid = DB::table('attr_colors')->insertGetId(['gid'=>$data['id'],'color'=>$data['color']]);
   		$res = DB::table('stock')->insert(['gid'=>$data['id'],'cid'=>$cid,'sid'=>$sid,'stock_num'=>$data['stock_num']]);

   		if($res)
   		{
   			return response()->json(0);
   		}else 
   		{
   			return response()->json(1);
   		}

   	}
}
