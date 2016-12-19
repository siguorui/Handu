<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Crypt;
use DB;
use Hash;
class UserController extends Controller
{
    //add
    public function add()
    {
        return view('admin.user.add');
    }
    //insert数据添加
    public function insert(Request $request)
    {
        //验证
        $this -> validate($request, [
            //验证是否为空
            'user_name' => 'required',
            'password' => 'required|max:18',
            'repassword' => 'required|same:password|max:18',
            ],[
            'user_name.required' => '用户名不能为空',
            'password.required' => '密码不能为空',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '两次密码不一致',
            ]);
        //获取的值
        $data = $request -> except('_token', 'repassword');

        
        //加密
        $data['password'] = Hash::make($data['password']);
        // dd($password);
        //解密
        // $str = Crypt::decrypt($password);
        // dd($str);
        //处理
        // $data['remember_token'] = str_random(50);//随机50个字符
        $time = time();
        $data['add_time'] = $time; 
        // dd($data);
        //执行添加
        // $sel = select * from managers where user_name = $data['user_name'];
        $sel = DB::table('managers') -> where('user_name',$data['user_name']) -> first();
        if($sel)
        {
            return back() -> with(['info' => '用户名重复']);
        }
        $res = DB::table('managers') -> insert($data);
        if($res)
        {
            return redirect('admin/user/index') -> with(['info' => '添加成功']);

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
        $data = DB::table('managers') -> where('user_name', 'like', '%'.$keyword.'%') -> paginate($num);
        return view('admin.user.index', ['data' => $data, 'request' => $request -> all()]);
    }

    //更改用户名 双击
    public function ajaxChangeName(Request $request)
    {
        $data = $request -> all();
        $res = DB::table('managers') -> where('user_name',$data['user_name']) -> first();
        if($res)
        {
            return response() -> json(0);
        }else
        {
            $r = DB::table('managers') -> where('id', $data['id']) -> update(['user_name' => $data['user_name']]);
            if($r)
            {
                return response() -> json(1);
            }else
            {
                return response() -> json(2);
            }
        }
    }

    public function edit($id)
    {
        $data = DB::table('managers') -> where('id',$id) -> first();

        return view('admin.user.edit', ['data' => $data]);

    }
    //更新
    public function update(Request $request, $id)
    {
        //验证
        $this -> validate($request, [
            //验证是否为空
            'user_name' => 'required',
            'password' => 'required|max:18',
            'repassword' => 'required|same:password|max:18',
            'pic' => 'image',
            ],[
            'user_name.required' => '用户名不能为空',
            'password.required' => '密码不能为空',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '两次密码不一致',
            'pic.image' => '图片格式不正确',

            ]);
        $data = $request -> except('_token', 'repassword');
        $oldPic = DB::table('managers') -> where('id', $id) -> first() -> pic;
        $oldPath = '.'.$oldPic;
        $time = time();
        $data['add_time'] = $time;
        $data['password'] = Crypt::encrypt($data['password']);


        //处理图片
        if($request -> hasFile('pic'))
        {
            if($request -> file('pic') -> isValid())
            {
                //获取扩展名
                $extension = $request -> file('pic') -> getClientOriginalExtension();
                // echo $extension;
                $fileName = str_random(32).'.'.$extension;
                $d = date('Ymd');
                $dir = './uploads/imgs/'.$d;
                $picd = '/uploads/imgs/'.$d.'/'.$fileName;
                if(!file_exists($dir))
                {
                    mkdir($dir,0777,true);
                }
                //移动文件
                $move = $request -> file('pic') -> move($dir,$fileName);
                if($move)
                {
                    $data['pic'] = $picd;
                }


            }
        }

       $res = DB::table('managers') -> where('id', $id) -> update($data);
       if($res)
       {
            if(file_exists($oldPath))
            {
                unlink($oldPath);
            }
            return redirect('/admin/user/index') -> with(['info' => '更新成功']);
       }else
       {
        return back() -> with(['info' => '更新失败']);
       }
    }

    //管理员权限
    public function auth($id)
    {
        $data = DB::table('managers') -> where('id',$id) -> first();

        return view('admin.user.auth', ['data' => $data]);

    }

    public function change(Request $request, $id)
    {
        $data = $request -> except('_token');
        $res = DB::table('managers') -> where('id', $id) -> update($data);
        if($res)
       {
            return redirect('/admin/user/index') -> with(['info' => '更新成功']);
       }else
       {
            return back() -> with(['info' => '更新失败']);
       }
    }


    public function delete($id)
    {
        // DB::table('users') -> where('id', $id) -> delete();
        $res = DB::table('managers') -> delete($id);
        if($res)
        {
            return redirect('admin/user/index') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
    }

    //前台用户管理
    public function users(Request $request)
        {
            //搜索加分页
            
            $num = $request -> input('num', 10);
            $keyword = $request -> input('keyword','');
            $data = DB::table('users as c2') 
                -> leftJoin('user_extra as c1', 'c2.id', '=', 'c1.uid') 
                -> select('c2.id', 'c2.email', 'c2.status', 'c1.expr_val','c1.score','c1.coupon','c1.send_card','c1.vip','c1.excge_code') -> where('email', 'like', '%'.$keyword.'%') -> paginate($num);
                // dd($data);die();
            return view('admin.user.users', ['data' => $data, 'request' => $request -> all()]);
        }

    //前台用户修改页面
    public function usersedit(Request $request,$id)
    {
        $data = DB::table('users') -> where('id',$id) -> first();
        $res = DB::table('user_extra') -> where('uid',$id) -> first();
        return view('admin.user.usersedit', ['data' => $data, 'res' => $res]);
    }
    //修改
    public function usersupdate(Request $request,$id)
    {
        $data = $request -> except('_token','email','status');
        $da = DB::table('user_extra') -> where('uid', $id) -> update($data);
        $r = $request -> except('_token','vip','score','expr_val','coupon','send_card','excge_code');
        $res = DB::table('users') -> where('id', $id) -> update($r);
        if($da || $res)
        {
            return redirect('/admin/user/users') -> with(['info' => '更新成功']);
        }else
        {
            return back() -> with(['info' => '更新失败']);
        }
    }

    //前台用户删除
    public function usersdelete($id)
    {
        $tra = DB::table('user_extra') -> where('uid',$id) -> delete();
        $res = DB::table('users') -> where('id',$id) -> delete();
        if($res)
        {
            return redirect('admin/user/users') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
    }

}
