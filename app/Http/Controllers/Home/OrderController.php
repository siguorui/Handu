<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    public function add()
    {
    	return view('home.order.order');
    }
}
