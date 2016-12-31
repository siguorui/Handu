<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CarcoulController extends Controller
{
    //添加轮播图
    public function add()
    {
    	return view('admin.carcoul.add');
    }

    public function insert(Request $request)
    {
    	$data = $request -> except('_token');
    	
    	 //处理图片
        if($request -> hasFile('pic'))
        {
            if($request -> file('pic') -> isValid())
            {
                //获取扩展名
                $extension = $request -> file('pic') -> getClientOriginalExtension();
                // echo $extension;
                $fileName = str_random(32).'.'.$extension;
                $dir = './uploads/imgs/';
                
                if(!file_exists($dir))
                {
                    mkdir($dir,0777,true);
                }
                //移动文件
                $move = $request -> file('pic') -> move($dir,$fileName);
                if($move)
                {
                    $data['pic'] = $fileName;
                }
            }
        }
       $res = DB::table('carsoul') -> insert($data);
       if($res)
       {
            return redirect('/admin/carcoul/index') -> with(['info' => '添加成功']);
       }else
       {
        return back() -> with(['info' => '添加失败']);
       }
    }



    //轮播图列表
    public function index()
    {
    	$data = DB::table('carsoul') -> get();

    	return view('admin.carcoul.index',['data' => $data]);
    }

    //删除
    public function delete($id)
    {
    	$oldPic = DB::table('carsoul') -> where('id', $id) -> first() -> pic;
        $oldPath = './uploads/imgs/'.$oldPic;
    	$data = DB::table('carsoul') -> delete($id);
    	if($data)
    	{
    		unlink($oldPath);
    		return redirect('admin/carcoul/index') -> with(['info' => '删除成功']);
    	}else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
    }
}
