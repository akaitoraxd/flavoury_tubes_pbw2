<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request){
        $request->merge(['status' => 'Unpaid']);
        $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $request->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('checkout', compact('snapToken', 'order'));
    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' || $request->transaction_status == 'settlement'){
                    $order = Order::find($request->order_id);
                    $order->update(['status' => 'Paid']);
                }
            }
    }

    public function invoice($id){
        $order = Order::find($id);
        return view('invoice', compact('order'));
    }

    public function index(){
        $orders = Order::query()->orderBy('created_at', 'desc')->get();
        return view('listOrder', compact('orders'));
    }

    public function indexUser(){
        $orders = Order::query()->where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('history', compact('orders'));
    }
}

