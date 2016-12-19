<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyCenterController extends Controller
{
    //
    public function MyCenter()
    {
    	return view('home.user.myCenter');
    }

    public function details()
    {
    	return view('home.user.details');
    }
}
