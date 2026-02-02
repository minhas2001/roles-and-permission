<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('backend.products.index',compact('products'));
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {

        $product = new Product();
        $product->title = $request->title;
        $product->original_price = $request->original_price;
        $product->sale_price = $request->sale_price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
            $filepath = $image->move('assets/product', $imageNamed);
            $product->image = $filepath;
        }

        $product -> save();

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.products.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->title = $request->title;
        $product->original_price = $request->original_price;
        $product->sale_price = $request->sale_price;

        // In store method
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
            $filepath = $image->move('assets/hero', $imageNamed);
            $product->image = $filepath;
        }

        $product -> save();

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
