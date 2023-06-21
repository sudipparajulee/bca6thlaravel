<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'payment_method' => 'required',
            'shipping_address' => 'required',
            'phone' => 'required',
            'person_name' => 'required',
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['order_date'] = date('Y-m-d');
        $data['status'] = 'Pending';
        $carts = Cart::where('user_id', auth()->user()->id)->where('is_ordered',false)->get();
        $totalamount = 0;
        foreach($carts as $cart) {
            $total = $cart->product->price * $cart->qty;
            $totalamount += $total;
        }
        $data['amount'] = $totalamount;
        $ids = $carts->pluck('id')->toArray();
        $data['cart_id'] = implode(',', $ids);
        Order::create($data);
        Cart::whereIn('id', $ids)->update(['is_ordered' => true]);
        //mail
        return redirect()->route('home')->with('success', 'Order has been placed successfully');
        
    }
}
