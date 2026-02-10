<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('productType')->get();
        return view('backend.products.index',compact('products'));
    }

    public function create()
    {
        $productType = ProductType::pluck('name','id');
        return view('backend.products.create',compact('productType'));
    }

    public function store(Request $request)
    {

        $product = new Product();

        $product->title = $request->title;
        $product->product_type_id = $request->product_type_id;
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
        $productType = ProductType::pluck('name','id');
        return view('backend.products.edit',compact('product','productType'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->title = $request->title;
        $product->product_type_id = $request->product_type_id;
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
