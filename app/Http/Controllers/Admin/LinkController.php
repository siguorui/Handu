<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LinkController extends Controller
{
    //
    public function add()
    {
        return view('admin.friendlinks.add');
    }
    public function insert(Request $request)
    {
        //验证
        $this -> validate($request, [
            //验证是否为空
            'link_name' => 'required',
            'url' => 'required',
            ],[
            'link_name.required' => '网站名不能为空',
            'url.required' => '地址不能为空',
            ]);
        $data = $request -> except('_token');

        $time = time();
        $data['add_time'] = $time;
        $res = DB::table('friendslinks') -> insert($data);
        if($res)
        {
            return redirect('admin/friendlinks/index') -> with(['info' => '添加成功']);

        }else
        {
            return back() -> with(['info' => '添加失败']);
        }
    }
    //index用户列表页
    public function index(Request $request)
    {
        //搜索加分页
        $num = $request -> input('num', 10);
        $keyword = $request -> input('keyword','');
        // $data = DB::table('users') -> get();
        $data = DB::table('friendslinks') -> where('link_name', 'like', '%'.$keyword.'%') -> paginate($num);
        return view('admin.friendlinks.index', ['data' => $data, 'request' => $request -> all()]);
    }
    //添加页面
    public function edit($id)
    {
        $data = DB::table('friendslinks') -> where('id',$id) -> first();
        return view('admin.friendlinks.edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $this -> validate($request,[
            'link_name' => 'required',
            'url' => 'required',
            ],[
            'link_name.required' => '网站名不能为空',
            'url.required' => '地址不能为空',
            ]);
        $data = $request -> except('_token');
        $time = time();
        $data['add_time'] = $time;

        $res = DB::table('friendslinks') -> where('id', $id) -> update($data);
        if($res)
        {
            return redirect('admin/friendlinks/index') -> with(['info' => '更新成功']);
        }else
        {
            return back() -> with(['info' => '更新失败']);
        }

    }
    //删除
    public function delete($id)
    {
        $res = DB::table('friendslinks') -> where('id', $id) -> delete();
        if($res)
        {
            return redirect('admin/friendlinks/index') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
    }
}
