<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Area;
use App\Http\Controllers\AreaController;

class SearchController extends Controller
{
    //
    public function index()
    {

        //
    
    }

    public function search()
    {

        
    }
    


    
    public function searchby(Request $request)
    {
        //echo "test";
        $cat_id= $request->cat;
        $area_id= $request->area;
        $cats = DB::table('categories')->select('id','name')->get();
        $areas = DB::table('areas')->select('id','name')->get();
        $shops = DB::table('shops')->where('category_id',$cat_id)->orWhere('area_id',$area_id)->get();
       if (count($shops)==0){
        return redirect()->back() ->with('alert', 'no shops!');
       }
       else{

        return view('website.category',compact('shops','cats','areas'));
        // var_dump($shops);die;        
       }
     	
        
    }


        
    public function near_me()
    {


        $latitude       =       7.041670930540654;
        $longitude      =       80.00718673226316;
        

        $shops          =       DB::table("shops");

        $shops          =       $shops->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                * cos(radians(latitude)) * cos(radians(longitude) - radians(" . $longitude . "))
                                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"));
        $shops          =       $shops->having('distance', '<', 10);
        $shops          =       $shops->orderBy('distance', 'asc');

        $shops          =       $shops->get();



        
        $cats = DB::table('categories')->select('id','name')->get();
        $areas = DB::table('areas')->select('id','name')->get();
        
        //$shops = DB::table('shops')->where('category_id',$cat_id)->orWhere('area_id',$area_id)->get();
        if (count($shops)==0){
         return redirect()->back() ->with('alert', 'no shops!');
        }
        else{
 
         return view('website.category',compact('shops','cats','areas'));
          //var_dump($shops);die;        
        }
	
        
    }
    


    
    
    
}