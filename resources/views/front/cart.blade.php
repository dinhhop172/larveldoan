@extends('layouts.master')
@include('front.menutop')
<div class="container-fluid" style="margin-top: 73px;">
    <div class="row">
        <div class="col-9">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 style="margin-bottom: 10px;color: #ffae00;font-weight: bold;" class="float-left">Giỏ hàng&thinsp;<h6 style="line-height: 25px;" class="float-left"> ({{ count_item_in_cart() }} sản phẩm)</h6></h5>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart_datas as $cart_data)
                        <tr>
                            <td><a href="">
                                <img src="{{ url(get_image_product($cart_data['product_id'])) }}" alt="" style="width: 100px;">
                            </a></td>
                            <td class="cart_name">
                                <p><a href="">{{$cart_data['product_name'] }}</a></p>
                            </td>
                            <td class="cart_price">
                                <p>{{ $cart_data['price'] }} Đ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    @if($cart_data['quantity'] >= 1)
                                        <a class="cart_quantity_down" href="{{ url('/cart/update-quantity', ['product_id' => $cart_data['product_id'], 'action' => 'desc']) }}"> - </a>
                                    @endif
                                    <input class="cart_quantity_input text-center" type="text" name="quantity" value="{{$cart_data['quantity'] }}" autocomplete="off" min="1" size="2" >
                                    <a class="cart_quantity_up" href="{{ url('/cart/update-quantity', ['product_id' => $cart_data['product_id'], 'action' => 'asc']) }}"> + </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{$cart_data['price'] * $cart_data['quantity'] }} Đ</p>
                            </td>
                            <td class="cart_delete">
                                <a style="color: red;" class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data['product_id'])}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-12 col-md-3">
                <div class="total">
                    <div class="cart-left">
                        <span style="font-weight: bold;color: #4e73df;">Tổng tiền: </span><br>
                        <span style="margin-left: 103px;color: #f73b3b;">{{$total_price}} Đ</span>
                    </div>
                    <div class="border-bottom"></div>
                    <div class="cart-bott">
                        <span style="font-weight: bold;color: #4e73df;">Cần thanh toán: </span><br>
                        <span style="margin-left: 103px;color: #f73b3b;">{{$total_price}} Đ</span>
                    </div>
                    <div class="border-bottom"></div>
                    <div class="cart-bott">
                        <span style="font-weight: bold;color: #4e73df;">Khuyến mãi: </span><br>
                        <span style="margin-left: 103px;color: #f73b3b;">0 Đ</span>
                    </div>
                </div>

                {{-- <a href="{{ route('checkout') }}" class="btn btn-primary" style="margin-right: 5px; width: 100%;margin-bottom: 5px;">Thanh toán</a><br>
                <a href="{{ route('front.index') }}" class="btn btn-warning" style="width: 100%">Tiếp tục mua hàng</a> --}}
        </div>
    </div>
    <div class="border-bottom mb" style="margin-top: 48px;"></div>
</div>
<div class="container-fluid">

    <div class="row bg-image">
        <div class="col-12 col-md-6">
            <img src="{{ asset('upload/bner.jpg') }}" alt="" style="width: 159%;">
        </div>

        <div class="col-12 col-md-6 bg-dh">
            <h3 class="dathang">Đặt Hàng</h3>
            <form method="POST" action="{{ route('dathang') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Họ tên:</label>

                    <div class="col-md-6">
                        <input id="name" type="name" class="form-control" name="name" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="mail" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">Đia chỉ:</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control" name="address" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">Số điện thoại:</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control" name="phone_number" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Đặt hàng
                        </button>
                        <a href="{{ route('front.index') }}" class="btn btn-warning">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


@include('front.footer')
