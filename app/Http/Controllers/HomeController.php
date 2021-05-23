<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Area;

class HomeController extends Controller
{
    //

    public function index()
    {
        $cats = DB::table('categories')->select('id','name')->get();
        $areas = DB::table('areas')->select('id','name')->get();
        $products = DB::table('products')->select('id','name')->get();
        $shops = Shop::all();

        // var_dump($cat);die;	
        return view('website.index',compact('cats','areas','products','shops'));
    }
    
}