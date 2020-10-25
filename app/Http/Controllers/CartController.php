<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $cart_datas = session()->get('carts');
        $total_price = 0;
        foreach($cart_datas as $cart_data){
            $total_price += $cart_data['price'] * $cart_data['quantity'];
        }
        return view('front.cart', compact('cart_datas','total_price'));
    }

    public function addToCart(Request $request){
        $carts = session()->get('carts');

        $product_id = $request->get('product_id');
        // if cart is empty then this the first product
        if(!$carts) {
            $carts = array(
                $product_id => $request->only('product_id',
                                              'product_name',
                                              'price', 'quantity'));
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($carts[$product_id])) {
            $carts[$product_id]['quantity'] = $carts[$product_id]['quantity'];
        }else{
            $carts[$product_id] = $request->only('product_id',
                                                 'product_name',
                                                 'price', 'quantity');
        }

        session()->put('carts', $carts);
        return redirect()->back();
    }

    public function deleteItem($product_id = null){
        $carts = session()->get('carts');
        unset($carts[$product_id]);
        session()->put('carts', $carts);
        return back();
    }

    public function updateQuantity($product_id, $action){
        $carts = session()->get('carts');
        if(isset($carts[$product_id])){
            if($action == 'asc')
                $carts[$product_id]['quantity'] = $carts[$product_id]['quantity'] + 1;
            if($action == 'desc')
                $carts[$product_id]['quantity'] = $carts[$product_id]['quantity'] - 1;
        }
        session()->put('carts', $carts);
        return back();
    }

    public function postCheckout(Request $request){
        $carts = Session::get('carts');
        $total_price = 0;
        foreach($carts as $cart_data){
            $total_price += $cart_data['price'] * $cart_data['quantity'];
        }
        // dd($carts);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->mail = $request->mail;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->date_order = date('Y-m-d');
        $order->total = $total_price;
        $order->save();
        if(!empty(Session::has('carts'))){
            foreach ($carts as $dathang) {
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $dathang['product_id'];
                $order_detail->quantity = $dathang['quantity'];
                $order_detail->price = $dathang['price'];
                $order_detail->save();
            }
        }

        Session::forget('carts');
        return redirect()->route('front.index')->with("thongbao", "Đặt hàng thành công");
    }
}
