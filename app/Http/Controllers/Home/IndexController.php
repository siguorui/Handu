<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //加载首页面
    public function index()
    {
    	return view('home.index.index');
    }
}
