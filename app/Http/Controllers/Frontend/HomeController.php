<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use App\Models\Backend\Product;
use App\Models\Backend\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data['categories'] = Category::where('status',1)->get();
        $data['hot_products'] = Product::where('status',1)->where('hot_key',1)->get();
        $data['flash_products'] = Product::where('status',1)->where('flash_key',1)->get();
        return view('frontend.home',compact('data'));
    }
    //shop
    function shop(){
        $data['categories'] = Category::where('status',1)->get();
        $data['hot_products'] = Product::where('status',1)->where('hot_key',1)->get();
        return view('frontend.subcategory',compact('data'));
    }
    function subcategory($slug)
    {
        $data['categories'] = Category::where('status',1)->get();
        $data['hot_products'] = Product::where('status',1)->where('hot_key',1)->get();
        // $data['status_key'] = Product::where('status',1)->get();
        $data['flash_products'] = Product::where('status',1)->where('flash_key',1)->get();
        $data['subcategory'] = Subcategory::where('slug', $slug)->first();
        return view('frontend.subcategory',compact('data'));
    }
    function product($slug)
    {
        // $data['carts'] = Cart::content()->count();
        $data['product'] = Product::where('slug', $slug)->first();
        return view('frontend.product', compact('data'));
    }
}
