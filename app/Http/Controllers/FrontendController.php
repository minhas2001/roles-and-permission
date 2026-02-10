<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Hero;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $heroes = Hero::latest()->limit(1)->get();
        $hero_products = Product::latest()->limit(1)->get();

        $collections = Collection::latest()->limit(1)->get();

        $best_sellers = Product::where('product_type_id' ,'2' )->latest()->take(4)->get();
        $trending_products = Product::where('product_type_id' ,'1' )->latest()->take(4)->get();
        $features = Product::where('product_type_id' ,'3' )->latest()->take(4)->get();
        $products = Product::latest()->get();

        return view('frontend.website', compact('heroes','collections','products', 'best_sellers','trending_products','features','hero_products'));
    }

    public function getProductDetails($id)
    {
        $product = Product::find($id);
        return view('frontend.products.product-details', compact('product'));
    }

    public function getProductDetailsStatic()
    {

        return view('frontend.products.product-details');
    }
    public function getProductPage()
    {
        $products = Product::get();
        return view('frontend.products.products-page',compact('products'));
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
