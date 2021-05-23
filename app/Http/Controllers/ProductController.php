<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use App\Models\Shop;

use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        $products = Product::all();
        $lastProduct = $products->last();
        return view('products.create',compact('lastProduct','shops'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

            $product=new Product();
            $product->name=$request->name;
            $product->shop_id=$request->shop_id;
            $path = $request->file('image')->store('public/files');
            $name = pathinfo($path, PATHINFO_BASENAME);
            $product->image = $name;
            $product->photo_path = $path;
            $product->description=$request->description;
            $product->price=$request->price;

            $product->save();
            // dd($product);
            return redirect()->route('products.index')
            ->with('success','Product created successfully.');

    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->name=$request->name;
        $product->shop_id=$request->shop_id;
        $path = $request->file('image')->store('public/files');
        $name = pathinfo($path, PATHINFO_BASENAME);
        $product->image = $name;
        $product->photo_path = $path;
        $product->description=$request->description;
        $product->price=$request->price;
        //dd($shop);
        $product->save();

    //direct back to the index page.
    return redirect()->route('products.index')->with('message', 'Product Updated Successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}