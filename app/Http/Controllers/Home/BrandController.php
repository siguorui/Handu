<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //迪葵恩品牌
    public function dequanna()
    {
    	return view('home.dequanna.dequanna');
    }
}
