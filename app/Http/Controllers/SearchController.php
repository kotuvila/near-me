<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index()
    {
        
        $shops = Shop::latest()->paginate(5);
        return view('website.index',compact('shops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = Category::all();
        $areas = Area::all();
        
        $shops = Shop::all();
        $lastShop = $shops->last();
        return view('website.index',compact('lastShop','categories','areas'));
        
    }
    
    
}