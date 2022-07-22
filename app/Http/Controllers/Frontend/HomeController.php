<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        // $data['categories'] = Category::where('status',1)->get();
        // $data['hot_products'] = Product::where('status',1)->where('hot_key',1)->get();
        return view('frontend.home');
    }
}
