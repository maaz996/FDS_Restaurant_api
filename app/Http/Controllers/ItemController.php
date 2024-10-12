<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    public function create()
    {
        $categorys = Category::all();
        return view('additem', compact('categorys'));
    }

    public function addData(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'variations' => 'required',
            'category_id' => 'required',
        ]);

        $item = new Item;
        $item->name = $req->name;

        if($req->hasFile('image'))
            {
             // $destination = public_path('image/' . $member->image);
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $item->image = $filename;

            }
            
        $item->description = $req->description;
        $item->price = $req->price;
        $item->variations = $req->variations;
        $item->category_id = $req->category_id;
        $item->save();
        return redirect()->route('additem')->with('success', 'Item added successfully!');
    }

    public function demo()
    {
        $item = Item::all();
        return view('itemList',compact('item'));
        
    }
    public function remove($id)
{
    $item = Item::find($id);

    // Check if the item exists
    if (!$item) {
        return redirect()->back()->with('error', 'Item not found!');
    }

    // Proceed to delete the item
    $item->delete();

    return redirect()->back()->with('success', 'Item deleted successfully!');
}


    public function edit($id)
    {
        $item = Item::find($id);
        if(is_null($item)) {
            // not found 
            return redirect()->back();
        }
        $categorys = Category::all();

        return view('edititem', compact('item', 'categorys'));
    }

    public function update(Request $req)
    {
        $item = Item::find($req->id);
        $item->name = $req->name;

        if($req->hasFile('image'))
            {
                $destination = public_path('image/' . $item->image);
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $item->image = $filename;
            }

        $item->description = $req->description;
        $item->price = $req->price;
        $item->variations = $req->variations;
        $item->category_id = $req->category_id;
        $item->save();
        return redirect('itemList');
    } 
}
