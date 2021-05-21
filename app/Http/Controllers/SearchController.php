<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model;

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
        // $categories = Category::all();
        // $areas = Area::all();
        $shops = Shop::all();
        return view('website.index',compact('shops'));
        
    }

    public function near_me(){
        
		$lat = 6.90826; // assign your current latitude
		$lon = 79.89349; // assign your currunt longitude
		
		$newUpperLat = $lat + 2.498065;
		$newLowerLat = $lat - 2.498065;
		
		$newUpperLon = $lon + 0.02111;
		$newUpperLon = $lon - 0.02111;

        
		
		$shops = DB::table('shops')
                ->whereBetween('latitude', [$newUpperLat, $newLowerLat])
                ->whereBetween('longitude', [$newUpperLon, $newUpperLon])
                ->get();
				
        // $shops = DB::table('shops')
        //         ->where('latitude', $lat)
        //         ->where('longitude', $lon)
        //         ->get();
		var_dump($shops);die;	
		
	}
    
    
    
}