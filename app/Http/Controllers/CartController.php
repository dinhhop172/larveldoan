<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

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
                $carts = [
                    $product_id => $request->only('product_id',
                                                'product_name',
                                                'price', 'quantity')];
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($carts[$product_id])) {
            // $carts[$product_id]['quantity'] = $request[$product_id]['quantity'];
            // if($request->quantity == '1'){
            //     $carts[$product_id]['quantity'] = 1;
            // }else{
            //     $carts[$product_id]['quantity'] += $request->quantity;
            // }
            $carts[$product_id]['quantity'] += $request->quantity;

            session()->put('carts', $carts);
            return redirect()->back();
        }else{
            $carts[$product_id] = $request->only('product_id',
                                                 'product_name',
                                                 'price', 'quantity');
        }
        session()->put('carts', $carts);
        // echo '<pre>';
        //     print_r($carts);
        // echo '</pre>';
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

    public function updateAllQuantity(Request $request){
        $carts = session()->get('carts');
        $total_price = 0;
        foreach($carts as $cart){
            echo '<pre>';
            print_r($cart);
            echo '</pre>';
            // $cart['quantity'] == $request->quantity;
            // $total_price += $cart['price'] * $request->quantity;
        }
        // session()->put('carts', $cart);
        // return back();
    }

    public function postCheckout(Request $request){
        $carts = Session::get('carts');
        $total_price = 0;
        foreach($carts as $cart_data){
            $total_price += $cart_data['price'] * $cart_data['quantity'];
        }
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
        if(!empty(Session::has('carts'))){
            $details = [
                'email' => $request->mail,
                'name'=>$request->name,
                'address'=>$request->address,
                'phoneNumber'=>$request->phone_number,
                'products'=> $carts,
                'totalPrice' => $total_price,
            ];
        }
        Mail::to($details['email'])->send(new SendMail($details));
        Session::forget('carts');
        return redirect('/')->with("thongbao", "Đặt hàng thành công");
    }

    public function createForm(){
        // dd(request()->all());
        return view('front.create-form');
    }

    public function actionCartCreate() {
        // dd(request()->all());
        return Redirect::back()->withInput(request()->all());
    }

    public function hehe(){
        $carts = session()->get('carts');
        foreach($carts as $cart){
            dd($carts);
        }

    }
}

