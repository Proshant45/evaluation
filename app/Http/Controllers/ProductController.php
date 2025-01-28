<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {  
    
        $categories = Category::all();
        //category wise product
        $catprod=[];
        foreach ($categories as $category ){
          $catprod[$category->name] = Product::where('category_id',$category->id)->get();
          
        }
        return view('index',["catprod"=>$catprod]);
    }

    public function create()
    {   
        $products = Product::all();
        $categories = Category::all();
        return view('product',["products"=>$products,
        "categories" =>$categories]);
    }



    public function store(Request $request)
    {
       
        $attributes = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        
        ]);
        $attributes['slug'] = Str::slug($attributes['name'],'-');

        Product::create($attributes);
       
        return redirect('product');
    }
    public function show($slug)
    {   
        $product = Product::where('slug',$slug)->first();
        return view('show-product',["product"=>$product]);
    }

    public function edit($slug)
    {   
        $product = Product::where('slug',$slug)->first();
        $categories = Category::all();
        return view('edit-product',["product"=>$product, "categories" =>$categories]);
        
    }

  
    public function update(Request $request,$slug)
    {   
        $attributes = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::where('slug',$slug)->first();
        $attributes['category_id'] = $request->category_id;
        $attributes['slug'] = Str::slug($attributes['name']);
    
        $product->update($attributes);

        return redirect('product');

    }

  
    public function destroy($slug)
    {  
        $product = Product::where('slug',$slug)->first();
        $product->delete();
        return back();
    }
}
