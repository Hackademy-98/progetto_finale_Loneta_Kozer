<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    //     $products = Product::orderBy('created_at','desc')->get();
    //     return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // dd($request);
        $file = $request->file('img');
       $product= Product::create([
            "user_id" => Auth::user()->id,
            "name"=> $request->name,
            "description" => $request->description,            
            "price" => $request->price,
            // "category_id" => $request->category,
            // "product_id" => $request->id,
            "img" => $file ? $file->store('public/images') : "public/images/default.png"     
            ]);
            $product->categories()->attach($request->category);
        return redirect()->route('user.home')->with('success','Product created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = $request->file('img');
        $product->update([
            "user_id" => Auth::user()->id,
            "name"=> $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "img" => $file ? $file->store('public/images') : $product->img
        ]);
         $product->categories()->detach();
        $product->categories()->attach($request->category);

        return redirect()->route('user.home')->with('success','Product updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('user.home')->with('success','Product.deleted!');
    }
    // filtra i prodoti in base ad una categoria selezionata
    public function filterByCategory(Category $category){
        // $products = $category->products;

        return view('product.filterByCategory',compact('category'));

    }

}
