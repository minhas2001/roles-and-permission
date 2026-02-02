<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Hero;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
 public function index()
{
    $collections = Collection::get();
    return view('backend.collections.index',compact('collections'));
}

    public function create()
{
    return view('backend.collections.create');
}

    public function store(Request $request)
{

    $collection = new Collection();
    $collection->title = $request->title;
    $collection->description = $request->description;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
        $filepath = $image->move('assets/collection', $imageNamed);
        $collection->image = $filepath;
    }

    $collection -> save();

    return redirect()->route('collections.index')->with('success', 'Collection created successfully');
}

    public function show($id)
{
}

    public function edit($id)
{
    $collection = Collection::find($id);
    return view('backend.collections.edit',compact('collection'));
}

    public function update(Request $request, $id)
{

    $collection = Collection::find($id);
    $collection->title = $request->title;
    $collection->description = $request->description;

    // In store method
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
        $filepath = $image->move('assets/collection', $imageNamed);
        $collection->image = $filepath;
    }

    $collection -> save();

    return redirect()->route('collections.index')->with('success', 'Collection created successfully');
}

    public function destroy($id)
{
    $collection = Collection::find($id);
    $collection->delete();
    return redirect()->route('collections.index')->with('success', 'Collection deleted successfully');
}
}
