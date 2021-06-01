<?php
  
namespace App\Http\Controllers;
   
use App\Models\Shop;
use App\Models\Category;
use App\Models\Area;


use Illuminate\Http\Request;
  
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $shops = Shop::latest()->paginate(10);
        return view('shops.index',compact('shops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $areas = Area::all();
        
        $shops = Shop::all();
        $lastShop = $shops->last();
        return view('shops.create',compact('lastShop','categories','areas'));
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'address' => 'required',
        //     // 'latitude' => 'required',
        //     // 'referral_codelongitude' => 'required',
        //     'active' => 'required',
        //     'image' => 'required',            
        // ]);
    
        // Shop::create($request->all());
     
        // return redirect()->route('shops.index')
        //                 ->with('success','Shop created successfully.');


            $shop=new Shop();
            $shop->name=$request->name;
            $shop->category_id=$request->category_id;
            $shop->area_id=$request->area_id;
            $shop->reg_no=$request->reg_no;
            $path = $request->file('photo')->store('public/files');
            $name = pathinfo($path, PATHINFO_BASENAME);
            $shop->photo = $name;
            $shop->photo_path = $path;
            $shop->description=$request->description;
            $shop->telephone=$request->telephone;
            $shop->address=$request->address;
            $shop->latitude=$request->latitude;
            $shop->longitude=$request->longitude;

            $shop->save();
            // dd($shop);
            // return redirect()->route('shops.index')
            //     ->with('success','Shop created successfully.');

                flash('Shop created successfully')->success();
                return redirect()->route('shops.index');
                
    
            // flash('shop created successfully')->success();
            // return redirect()->route('items.index');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('shops.show',compact('shop'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        $categories = Category::all();
        $areas = Area::all();
        
        return view('shops.edit',compact('shop','categories','areas'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id) {
        $shop = Shop::find($id);
        $shop->name=$request->name;
        $shop->category_id=$request->category_id;
        $shop->area_id=$request->area_id;
        $shop->reg_no=$request->reg_no;
        $path = $request->file('photo')->store('public/files');
        $name = pathinfo($path, PATHINFO_BASENAME);
        $shop->photo = $name;
        $shop->photo_path = $path;
        $shop->description=$request->description;
        $shop->telephone=$request->telephone;
        $shop->address=$request->address;
        $shop->latitude=$request->latitude;
        $shop->longitude=$request->longitude;
        $shop->status = $request->status;
        //dd($shop);
        $shop->save();

        flash('Shop created successfully')->success();
        return redirect()->route('shops.index');
    //direct back to the index page.
    //return redirect()->route('shops.index')->with('message', 'Shop Updated Successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
    
        // return redirect()->route('shops.index')
        //                 ->with('success','Shop deleted successfully');

                        flash('Shop deleted successfully')->success();
                        return redirect()->route('shops.index');
    }
}