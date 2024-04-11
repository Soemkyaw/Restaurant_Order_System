<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('kitchen.order');
    }

    public function addOrder(Request $request){
        $orderID = 0 .rand(1000,9999).'_'.rand(500,1000);
        logger($request->all());
    }
}
