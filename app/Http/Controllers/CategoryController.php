<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Item;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('addcategory', compact('restaurants'));
    }

    public function addData(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'restaurant_id' => 'required',
        ]);

        $category = new Category();
        $category->name = $req->name;
        $category->restaurant_id = $req->restaurant_id;
        $category->save();
        return redirect()->route('addcategory')->with('success', 'Category added successfully!');
    }

    public function demo()
    {
        $category = Category::all();
        return view('categoryList',compact('category'));
        
    }

    public function remove($id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->back()->with('error', 'Category not found!');
    }

    $category->delete();
    return redirect()->back()->with('success', 'Category deleted successfully!');
}


    public function edit($id)
    {
        $category = Category::find($id);
        if(is_null($category)) {
            // not found 
            return redirect()->back();
        }
        $restaurants = Restaurant::all();

        return view('editcategory', compact('category', 'restaurants'));
    }

    public function update(Request $req)
    {
        $category = Category::find($req->id);
        $category->name = $req->name;
        $category->restaurant_id = $req->restaurant_id;
        
        $category->save();
        return redirect('categoryList');
    } 
}
