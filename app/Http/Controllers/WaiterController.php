<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Table;
use App\Models\Category;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        $categories = Category::all();
        return view('waiter.index',compact('dishes','categories'));
    }

    public function show(Dish $dish)
    {
        $tables = Table::all();
        return view('waiter.dishDetail',compact('dish','tables'));
    }

    public function filterByCategory(Category $category)
    {
        $dishes = Dish::where('category_id',$category->id)->get();
        $categories = Category::all();
        return view('waiter.index',compact('dishes','categories'));
    }
}
