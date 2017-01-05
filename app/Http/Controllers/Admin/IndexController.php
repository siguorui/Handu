<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    public function index()
    {
    	return view('admin.index.index');
    }

     public function showmsg(Request $request)
    {
        $maxID = $request->input('maxID');
        // dd($maxID);
        $data = DB::table('message')->where('id','>',$maxID)->get();
        return response()->json($data);
    }

    public function sendmsg(Request $request)
    {
    	date_default_timezone_set('PRC');
        $data = $request->all();
        $data['sender'] = '韩都客服';
        $data['add_time'] = date('Y-m-d H:i:s',time());

        $res = DB::table('message')->insert($data);

        if($res)
        {
            return response()->json(0);
        }else
        {
            return response()->json(1);
        }
        
    }

    public function dropchat()
    {
    	 DB::table('message')->delete();

    }
}
