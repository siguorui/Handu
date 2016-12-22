<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    //购物车
    public function shopingcart(Request $request)
    {
    	
    	return view('home.shopingcart.shopingcart');
    }
    
   
}
