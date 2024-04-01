<?php

namespace App\Http\Controllers;

// use Storage;
use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDishRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateDishRequest;

class DishController extends Controller
{

    // Display a listing of the resource.
    public function index()
    {
        $dishes = Dish::with('category')->get();
        return view('kitchen.dish',compact('dishes'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $categories = Category::all();
        return view('kitchen.dish_create',compact('categories'));
    }


    // Store a newly created resource in storage.
    public function store(StoreDishRequest $request)
    {
        $data = $this->formData($request);
        if ($request->hasFile('image')) {
            $imageName = uniqid().'__'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$imageName);
            $data['image'] = $imageName;
        }
        Dish::create($data);
        return redirect()->route('dish.index');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(Dish $dish)
    {
        // dd($dish);
        $categories = Category::all();
        return view('kitchen.dish_edit',compact('categories','dish'));
    }


    // Update the specified resource in storage.
    public function update(UpdateDishRequest $request,Dish $dish)
    {
        $data = $this->formData($request);
        if ($request->hasFile('image')) {
            $oldImage = $dish->image;

            if($oldImage !== null )
            {
                Storage::delete('public/'.$oldImage);
            }

            $imageName = uniqid().'__'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$imageName);
            $data['image'] = $imageName;
        }
        $dish->update($data);
        return redirect()->route('dish.index');
    }

    //  Remove the specified resource from storage.
    public function destroy(Dish $dish)
    {
        $oldImage = $dish->image;
        if($oldImage !== null )
        {
            Storage::delete('public/'.$oldImage);
        }
        $dish->delete();
        return redirect()->route('dish.index');
    }

    public function formData($request)
    {
        return [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price
        ];
    }
}
