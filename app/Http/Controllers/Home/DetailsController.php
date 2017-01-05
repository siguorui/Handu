<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

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

                // $d = date('Ymd');
                $dir = './uploads';
                $photod = '/uploads/'.$fileName;

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
        $res = DB::table('user_details') -> where('uid',$id) -> update($data);
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


    public function addidea(Request $request)
    {
        $id = Session('master') -> id;

        $data = $request -> except('_token');
        $data['uid'] = $id;
        $time = time();
        $data['feedback_time'] = $time;

        $data1 = DB::table('feedback') -> insert($data);
    	
        if($data1)
        {
            return redirect('home/user/idea') -> with(['info' => '提交成功']);
        }else
        {
            return back() -> with(['info' => '提交失败,请重新提交']);
        }
    }

    public function address()
    {

        $id = Session('master') -> id;
        $data = DB::table('address') -> where('uid',$id) -> get();
        // dd($data);
        
        return view('home.user.address',['data' => $data]);
     
    }

    public function select(Request $request)
    {   
        $data = $request->all();
        $data2 = DB::table('address') -> where('id',$data['id']) -> first();
        $str = ($data2 ->addr_area);
        $arr = explode(" ",$str);

        $province = $arr[0];
        $city = $arr[1];
        $district = $arr[2];
        
        $data2->province = $province;
        $data2->city = $city;
        $data2->district = $district;
        // dd($data2);
        return response() -> json($data2);
    }

    public function favorite()
    {
        $id = Session('master') -> id;
        $data = DB::table('goods_collection') ->where('uid',$id) -> get();
        if(count($data) != 0)
        {
            foreach($data as $k => $v){

                $data1[$k] = DB::table('goods_list') ->where('id',$v->gid) -> first();
            }   
            return view('home.user.favorite',['data' => $data],['data1' => $data1]);
        }else
        {
            return view('home.user.favorite');
        }
    }


    public function addaddr(Request $request)
    {
        $this -> validate($request,[
            'to_name' => 'required',
            'phone' => 'required|min:11|max:11',
            'addr_deta' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required'
            ],[
            'to_name.required' => '请填写收货人姓名',
            'phone.min' => '手机号码格式不正确',
            'phone.max' => '手机号码格式不正确',
            'phone.required' => '请填写手机号码',
            'addr_deta.required' => '请填写详细地址',
            'province.required' => '请选择省份',
            'city.required' => '请选择城市',
            'district.required' => '请选择县区'
            ]);
        $id = Session('master') -> id;
        $data1 = $request -> except('_token','id');
        $data = $request -> except('_token','province','city','district','id');
        $data['addr_area'] = $data1['province'].' '.$data1['city'].' '.$data1['district'];
        $data['addr_deta'] = $data1['addr_deta'];
        $data['uid'] = $id;
        if(isset($data['state']))
        {
            if($data['state'] == 1)
            {
                DB::table('address')->update(['state'=>0]);
            }
        }
        // dd($data);
        $res = DB::table('address')  -> insert($data);
        if($res)
        {
            return redirect('home/user/address') -> with(['info' => '添加地址成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }
    }

    public function delete($id)
    {
        $res = DB::table('address') -> where('id',$id) -> delete();

        if($res)
        {
            return redirect('home/user/address') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
    }


    public function upaddress(Request $request)
    {
        $data2 = $request -> except('_token');
        // dd($data2);
        $data1 = $request -> except('_token','province','city','district','id');
        $data1['addr_area'] = $data2['province'].' '.$data2['city'].' '.$data2['district'];
        $id = $data2['id'];
        $data1['addr_deta'] = $data2['addr_deta'];
        // dd($data1);
        $res = DB::table('address') -> where('id',$id) -> update($data1);
        if($res)
        {
            $id = Session('master') -> id;
            $data = DB::table('address') -> where('uid',$id) -> get();
            return view('home.user.address',['data'=> $data]);
        }else
        {
            return back() -> with(['info' => '修改失败']);
        }
        
    }

    public function defadd(Request $request)
    {
        $data1 = $request->all();
        $id = $data1['id'];
        $res1 = DB::table('address') -> update(['state' => 0]);
        $res = DB::table('address') -> where('id',$id) -> update(['state' => 1]);
        if($res)
        {
            $id = Session('master') -> id;
            $data = DB::table('address') -> where('uid',$id) -> get();
            // dd($data);
            if($data)
            {
                // return view('home.user.address');
                return response() -> json(0);
            }else
            {
                return('异常');
            }
        }else
        {
            return('异常');
        }
    }

}
