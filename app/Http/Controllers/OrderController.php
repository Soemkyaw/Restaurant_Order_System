<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Dish;
use App\Models\OrderList;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = OrderList::whereIn('order_status',[1,2])->get();
        $rawStatus = config('orderStatus.order_status');
        $status = array_flip($rawStatus);
        // dd($ststus);
        return view('kitchen.order',compact('orders','status'));
    }

    public function create(Request $request){
        $orderID = uniqid().rand(1000,9999).'_'.rand(500,1000);
        $orders = $request->all();
        // logger($orders);
        foreach ($orders as $order) {
                OrderList::create([
                'table_id' => $order['table_id'],
                'dish_id' => $order['dish_id'],
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

    public function approve(OrderList $order){
        $status = [
            'order_status' => config('orderStatus.order_status.processing')
        ];
        $order->update($status);
        return redirect()->route('order');
    }

    public function ready(OrderList $order){
        $status = [
            'order_status' => config('orderStatus.order_status.ready')
        ];
        $order->update($status);
        return redirect()->route('order');
    }

    public function cancel(OrderList $order){
        $status = [
            'order_status' => config('orderStatus.order_status.cancel')
        ];
        $order->update($status);
        return redirect()->route('order');
    }
}
