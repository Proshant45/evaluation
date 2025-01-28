<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class CategoryController extends Controller
{
    
    public function index()
    { 
        $categories = Category::all();
        return view('category',[
            "categories"=>$categories
        ]);
    }



    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3'
        ]);
        Category::create($attributes);
        return redirect('category');
    }

 
    public function show($id)
    {   $category = Category::find($id);
        return view('edit-category',["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id)
    {   
        $attributes = $request->validate([
            'name' => 'required|min:3'
        ]);

        $result = Category::findOrFail($id);
        $result->update($attributes);       
        return redirect('category');
    }

   
    public function destroy($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();
        return back();
    }
}
