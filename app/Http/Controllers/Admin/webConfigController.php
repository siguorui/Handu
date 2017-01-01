<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class webConfigController extends Controller
{
    //网站配置
    public function webConfig()
    {
        $data = DB::table('web_config') -> first();
        // dd($data);
        return view('admin.webConfig.webConfig',['data' => $data]);
    }

    public function update(Request $request)
    {
        $data1 = $request -> except('_token');
        // dd($data1);
        if($request -> hasFile('web_logo'))
        {
            if($request -> file('web_logo') -> isValid())
                {
                //获取扩展名
                $extension = $request -> file('web_logo') ->getClientOriginalExtension();
                // echo $extension;
                $fileName = str_random(32).'.'.$extension;
                // $d = date('Ymd');
                $dir = './admin/imgs/';
                $photod = '/admin/imgs/'.$fileName;
                if(!file_exists($dir))
                {
                    mkdir($dir,0777,true);
                }
                //移动文件
                $move = $request -> file('web_logo') -> move($dir,$fileName);
                if($move)
                {
                        $data1['web_logo'] = $photod;
                }
                
            }
            $oldLogo = DB::table('web_config') -> first() -> web_logo;
            $oldPath = '.'.$oldLogo;

            if(file_exists($oldPath))
                {
                    unlink($oldPath);
                }
        }
        
        // dd($oldPath);
        $res = DB::table('web_config') -> update($data1);
        if($res)
        {
            
            return redirect('/admin/webConfig/webConfig') ->with(['info' => '更新成功']);
        }else
        {
            return back() ->with(['info' => '更新失败']);
        }
    }
    
}
