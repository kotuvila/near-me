<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use App\Models\Product;
use DB;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        //        Authorized
       // abort_unless(\Gate::allows('category_view'), 403);

        $categories = Category::all();
        return view('categories.index', compact('categories')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        Authorized
        //abort_unless(\Gate::allows('category_create'), 403);

        return view('category.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //        Authorized
        //abort_unless(\Gate::allows('category_create'), 403);

            $category = Category::create($request->all());
            return redirect()->route('admin.categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //        Authorized
       // abort_unless(\Gate::allows('category_edit'), 403);

//        $category->update($request->all());
        $br = array(
            'id'    => $request->id,
            'name'   => $request->name,

        );

        Category::whereId($category->id)->update($br);
        return redirect()->route('admin.categories.index');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
//        Authorized
        //abort_unless(\Gate::allows('category_delete'), 403);

        $category = Category::findOrFail($category->id);
        $category->delete();
        return redirect()->route('admin.categories.index'); //
    }


    public function showCategory(Category $category)
    {
        $cats = DB::table('categories')->select('id','name')->get();
        // var_dump($cat);die;	
        return view('website.index',['cats'=>$cats]);
        
        // $categories = Category::get()
        //                     ->map
        //                     ->only(['id', 'name']);
  
        // dd($categories);

        
    }
    
        
}