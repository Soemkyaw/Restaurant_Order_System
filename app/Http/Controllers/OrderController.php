<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderList;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('kitchen.order');
    }

    public function addOrder(Request $request){
        $orderID = uniqid().rand(1000,9999).'_'.rand(500,1000);
        $orders = $request->all();
        // logger($orders);
        foreach ($orders as $order) {
                OrderList::create([
                'table_id' => $order['table_id'],
                'dish' => $order['dish_id'],
                'qty'  => $order['qty'],
                'note'  => $order['note'],
                'order_status' => config('orderStatus.order_status.new')
            ]);
        }

        Cart::truncate();

        return response()->json([
            'status' => 'success'
        ], 200);
    }
}
