<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $file = $request->file('img');
        Product::create([
            "user_id" => Auth::user()->id,
            "name"=> $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "img" => $file ? $file->store('public/images') : "public/images/default.jpg"
        ]);
        return redirect()->route('user.home')->with('success','Product created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
