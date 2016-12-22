<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DetailsController extends Controller
{
    //更新个人信息
    public function update(Request $request)
    {
        $id = Session('master') -> id;
        $this -> validate($request,[
            'photo' => 'image',
            'mobile_phone' => 'min:11|max:11',
            'email' => 'email'
            ],[
            'photo.image' => '请选择一张图片',
            'mobile_phone.min' => '不能少于11位',
            'mobile_phone.max' => '不能大于11位',
            'email.email' => '邮箱格式不正确'
            ]);
    	
        $data = $request -> except('_token');
        $live_place = $data['province'].$data['city'].$data['district'].$data['user_address'];
        $data = $request -> except('_token','province','city','district','user_address');
        $data['live_place'] = $live_place;
      
        if($request -> hasFile('photo'))
        {
            if($request -> file('photo') -> isValid())
                {
                //获取扩展名
                $extension = $request -> file('photo') ->getClientOriginalExtension();
                // echo $extension;
                $fileName = str_random(32).'.'.$extension;
                $d = date('Ymd');
                $dir = './uploads/imgs/'.$d;
                $photod = '/uploads/imgs/'.$d.'/'.$fileName;
                if(!file_exists($dir))
                {
                    mkdir($dir,0777,true);
                }
                //移动文件
                $move = $request -> file('photo') -> move($dir,$fileName);
                if($move)
                {
                        $data['photo'] = $photod;
                }
            }
        }
        $request -> flash();
        $res = DB::table('user_details') -> where('id',$id) -> update($data);
        if($res)
        {
            
            return redirect('/home/user/details') ->with(['info' => '更新成功']);
        }else
        {
            return back() ->with(['info' => '更新失败']);
        }

    }

    public function vip()
    {
        $id = Session('master') -> id;

        $data = DB::table('users') -> where('id',$id) -> first();

        $data1 = DB::table('user_details') -> where('uid',$data -> id) -> first();

        $data2 = DB::table('user_extra') -> where('uid',$data -> id) -> first();
  
    	return view('home.user.vip',['data' => $data,'data1' => $data1,'data2' => $data2]);

    }

    public function idea()
    {
    	return view('home.user.idea');
    }

    public function address()
    {
        return view('home.user.address');
    }
}
