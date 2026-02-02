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

        $collections = Collection::latest()->limit(1)->get();
        $products = Product::all();

        return view('frontend.website', compact('heroes','collections','products'));
    }

    public function create()
    {
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
