<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RestaurantController extends Controller
{
    //
    public function index()
    {
        return Restaurant::with('categories.items')->get();
    }

    public function store(Request $request)
    {
        $restaurant = Restaurant::create($request->all());
        return response()->json($restaurant, 201);
    }

    //------------------------------------

    public function create()
    {
        return view('addrestaurant');
    }

    public function addData(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'location' => 'required',
            'contact' => 'required',
            'image' => 'required',
        ]);

        $restaurant = new Restaurant;
        $restaurant->name = $req->name;
        $restaurant->location = $req->location;
        $restaurant->contact = $req->contact;

        if($req->hasFile('image'))
            {
             // $destination = public_path('image/' . $member->image);
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $restaurant->image = $filename;

            }

        $restaurant->save();
        return redirect()->route('addrestaurant')->with('success', 'Restaurant added successfully!');
    }

    public function demo()
    {
        $restaurant = Restaurant::all();
        return view('restaurantList',compact('restaurant'));
        
    }

    public function remove($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return redirect()->back()->with('success', 'Restaurant deleted successfully!');
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        if(is_null($restaurant)) {
            // not found 
            return redirect()->back();
        }
            return view('editrestaurant', compact('restaurant'));
    }

    public function update(Request $req)
    {
        $restaurant = Restaurant::find($req->id);
        $restaurant->name = $req->name;
        $restaurant->location = $req->location;
        $restaurant->contact = $req->contact;

        if($req->hasFile('image'))
            {
                $destination = public_path('image/' . $restaurant->image);
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $restaurant->image = $filename;
            }
        
        $restaurant->save();
        return redirect('restaurantList');
    } 
}
