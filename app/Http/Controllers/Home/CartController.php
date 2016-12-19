<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //购物车
    public function shopingcart()
    {
    	return view('home.shopingcart.shopingcart');
    }
   
}
