<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::get();
        return view('backend.product-type.index',compact('productTypes'));
    }

    public function create()
    {
        return view('backend.product-type.create');

    }

    public function store(Request $request)
    {
        $productType = new ProductType();
        $productType->name = $request->name;
        $productType->code = $request->code;

        $productType -> save();

        return redirect()->route('product-type.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $productType =  ProductType::find($id);
        return view('backend.product-type.edit',compact('productType'));

    }

    public function update(Request $request, $id)
    {

        $productType =  ProductType::find($id);
        $productType->name = $request->name;
        $productType->code = $request->code;

        $productType -> save();

        return redirect()->route('product-type.index');
    }

    public function destroy($id)
    {
        $productType =  ProductType::find($id);
        $productType->delete();
        return redirect()->route('product-type.index');

    }
}
