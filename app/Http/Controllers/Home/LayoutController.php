<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //遍历
    public function all()
    {
    	$data = DB::table('category') ->where('pid','0') -> get();
    	dd($data);
    	// return view('home.index.index');
    }
}
