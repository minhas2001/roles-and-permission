<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::get();
        return view('backend.hero.index',compact('heroes'));
    }

    public function create()
    {
        return view('backend.hero.create');
    }

    public function store(Request $request)
    {

        $hero = new Hero();
        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->image_title = $request->image_title;
        $hero->original_price = $request->original_price;
        $hero->sale_price = $request->sale_price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
            $filepath = $image->move('assets/hero', $imageNamed);
            $hero->image = $filepath;
        }

        $hero -> save();

        return redirect()->route('heroes.index')->with('success', 'Hero created successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $hero = Hero::find($id);
        return view('backend.hero.edit',compact('hero'));
    }

    public function update(Request $request, $id)
    {

        $hero = Hero::find($id);
        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->image_title = $request->image_title;
        $hero->original_price = $request->original_price;
        $hero->sale_price = $request->sale_price;

        // In store method
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
            $filepath = $image->move('assets/hero', $imageNamed);
            $hero->image = $filepath;
        }

        $hero -> save();

        return redirect()->route('heroes.index')->with('success', 'Hero created successfully');
    }

    public function destroy($id)
    {
        $hero = Hero::find($id);
        $hero->delete();
        return redirect()->route('heroes.index')->with('success', 'Hero deleted successfully');
    }
}
