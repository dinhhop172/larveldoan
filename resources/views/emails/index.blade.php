<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keira</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header"><img src="https://icdn.dantri.com.vn/zoom/1200_630/2020/02/19/hacker-1582083379082.jpg" alt="" width="50%"></div>
                    <div class="card-body">
                        <h2 class="text-center">Xin chào {{ $details['name'] }}</h2>
                        <p class="text-center">Đỉa chỉ: {{ $details['address'] }}</p>
                        <p class="text-center">Số điện thoại: {{ $details['phoneNumber'] }}</p>
                        <h2>Đơn hàng của bạn: </h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>*</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $stt = 1;
                                @endphp
                                @foreach($details['products'] as $item)
                                <tr>
                                    <td scope="row">{{ $stt++ }}</td>
                                    <td>{{ $item['product_name'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>{{ $item['quantity'] * $item['price'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h2>Tổng giá: {{ $details['totalPrice'] }}</h2>
                        <h2>This mail sent by KayLeight</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
