<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Catecontroller extends Controller
{
    //显示添加类别页面
    public function add()
    {
    	//按照path对查询出的结果排序
    	$data = DB::table('category') -> select('id','path','title',DB::raw("concat(path,',',id) AS sort_str")) -> orderBy('sort_str') -> get();
    	
    	//处理title分级显示
    	foreach ($data as $key => $value) {
    		$num = substr_count($value->path, ',');
    		
			$str = str_repeat('|　　', $num+1);
			$value->title = $str.'|---'.$value->title;
	
    	}
    	return view('admin.cate.add',['data'=>$data]);
    }

    //插入数据库
    public function insert(Request $request)
    {
    	$this -> validate($request,[
    		'title'=>'required',
    		'logo'=>'image',
    		'assit_logo'=>'image',
    		],[
    		'title.required'=>'类别名不能为空',
    		'logo.image'=>'不是一张合法的图片',
    		'assit_logo.image'=>'不是一张合法的图片',
    		]);

    	//$data['pid']传过来的名称为pid，真实值实际上是该条数据的id，很巧妙的用法
    	$data = $request -> except('_token');

    	if($request -> hasFile('logo'))
    	{
    		if($request -> file('logo') -> isValid())
    		{
    			$extension = $request -> file('logo')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/category';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('logo')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['logo'] = $fileName;
    			}
    		}
    	}

    	if($request -> hasFile('assit_logo'))
    	{
    		if($request -> file('assit_logo') -> isValid())
    		{
    			$extension = $request -> file('assit_logo')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/category';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('assit_logo')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['assit_logo'] = $fileName;
    			}
    		}
    	}

    	if($data['pid'] == '0')
    	{
    		$path = '0';
    	}else
    	{
    		$pdata = DB::table('category') -> where('id',$data['pid']) -> first();
    		$path = $pdata -> path.','.$data['pid'];
    	}
   
    	$data['path'] = $path;
    	
    	$res = DB::table('category') -> insert($data);
    	if($res)
    	{
    		return redirect('/admin/cate/index') -> with(['info'=>'添加成功']);
    	}else
    	{
    		return back() -> with(['info'=>'添加失败']);
    	}

    }

    public function index()
    {
  //   	mysql> select c1.*,concat(c1.path,',',c1.id) as sort_str,c2.title as ptitle from category as c1 left join category as c2 on c1.pid=c2.id order by sort
		// _str;
		
    	//按照path对查询出的结果排序
    	$data = DB::table('category as c1')
    		 -> leftJoin('category as c2','c1.pid','=','c2.id')
    		 -> select('c1.*','c2.title as ptitle',DB::raw("concat(c1.path,',',c1.id) AS sort_str")) -> orderBy('sort_str') -> get();
    	
    	//处理title分级显示
    	foreach ($data as $key => $value) {
    		$value -> num = substr_count($value->path, ',');
			// $str = str_repeat('|　　', $num);
			// $value->title = $str.'|---'.$value->title;
		}

		// var_dump($data); die;
    	return view('admin.cate.index',['data'=>$data]);
    }

    public function edit($id)
    {
    	//按照path对查询出的结果排序
    	$data = DB::table('category') -> select('id','path','title',DB::raw("concat(path,',',id) AS sort_str")) -> orderBy('sort_str') -> get();
    	
    	//处理title分级显示
    	foreach ($data as $key => $value) {
    		$num = substr_count($value->path, ',');
    		
			$str = str_repeat('|　　', $num+1);
			$value->title = $str.'|---'.$value->title;
	
    	}

    	$dataFirst = DB::table('category')->where('id',$id)->first();
    	return view('admin.cate.edit',['data'=>$data,'dataFirst'=>$dataFirst]);
    }

    public function update(Request $request,$id)
    {
    	$this -> validate($request,[
    		'title'=>'required',
    		'logo'=>'image',
    		'assit_logo'=>'image',
    		],[
    		'title.required'=>'类别名不能为空',
    		'logo.image'=>'不是一张合法的图片',
    		'assit_logo.image'=>'不是一张合法的图片',
    		]);

    	//$data['pid']传过来的名称为pid，真实值实际上是该条数据的id，很巧妙的用法
    	$data = $request -> except('_token');

    	if($request -> hasFile('logo'))
    	{
    		if($request -> file('logo') -> isValid())
    		{
    			$extension = $request -> file('logo')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/category';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('logo')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['logo'] = $fileName;
    			}
    		}
    	}

    	if($request -> hasFile('assit_logo'))
    	{
    		if($request -> file('assit_logo') -> isValid())
    		{
    			$extension = $request -> file('assit_logo')->getClientOriginalExtension();

    			$fileName = str_random(32).'.'.$extension;
    			$dir='./home/imgs/category';

    			//保证在linux下也没有问题
    			if(!file_exists($dir))
    			{
    				mkdir($dir,0777,true);
    			}

    			$move = $request -> file('assit_logo')->move($dir,$fileName);
    			
    			if($move)
    			{
    				$data['assit_logo'] = $fileName;
    			}
    		}
    	}

    	if($data['pid'] == '0')
    	{
    		$path = '0';
    	}else
    	{
    		$pdata = DB::table('category') -> where('id',$data['pid']) -> first();
    		$path = $pdata -> path.','.$data['pid'];
    	}
   
    	$data['path'] = $path;
    	
    	$res = DB::table('category') -> where('id',$id)-> update($data);
    	if($res)
    	{
    		return redirect('/admin/cate/index') -> with(['info'=>'更新成功']);
    	}else
    	{
    		return back() -> with(['info'=>'更新失败']);
    	}
    }

    public function delete($id)
    {
    	//判断是否有子分类
    	$res = DB::table('category') -> where('pid',$id) -> first();
    	
    	if($res)
    	{
    		return back() -> with(['info'=>'对不起，有子分类，不能删除']);
    	}

    	$res = DB::table('category') -> delete($id);

    	if($res)
    	{
    		return redirect('/admin/cate/index') -> with(['info'=>'删除成功']);
    	}else
    	{
    		return back() -> with(['info'=>'删除失败']);
    	}
    }
}
