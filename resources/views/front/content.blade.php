@extends('front.welcome')
@section('content')
<div class="content">
    @foreach ($brands as $brand)
    <div class="container text-white" style="margin-top:80px !important">
        <h2 class="widget-title"><span>{{ $brand->name }}</span></h2>
        <div class="row">
            @foreach ($brand->products as $product)
            <div class="col-md-3 col-sm-6 col-xs-12 ahover" style="margin-top:50px; padding: 10px; transition-duration: .5s;">
                <img style="width: 100%" src="{{ $product->image }}" alt="">
                <p class="ten text-center">{{ $product->name}}</p>
                <p class="price"><b>Price:</b> {{ $product->price}} Đ</p>
                <a href="{{ route('front.show', $product->id) }}" class="btn btn-warning " style="color: #000;">Detail</a>
                <a href="{{ route('addToCart') }}" class="btn">
                    <form action="{{route('addToCart')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="quantity" value="1" id="quantity">
                        <button type="submit" class="btn btn-primary">
                            Add to cart
                        </button>
                    </form>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

<div class="nam-cta-area bg-gray padding-80" style="margin-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-xl-6">
                <div class="cta-content">
                    <h2 style="color:black;">Make Stilo Your <br>
                        Number One Choice
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </p>
                    <div class="nam-btn-group mt-30">
                        <button href="#" class="btn bx-shd nam-btn active mr-3 mb-3 mb-sm-0">Book An Appointment</button>
                        <button href="#" class="btn bx-shd nam-btn ">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <img src="{{ asset('upload/l11.jpg') }}" alt="" style="width: 115%; height: 235px;">
            </div>
        </div>
    </div>
</div>
@endsection
@php
    if (Session::has('thongbao')) {
        echo "
        <script>
            alert('Bạn đã đặt hàng thành công, vui lòng chờ để nhận hàng');
        </script>
        ";
    }
@endphp
