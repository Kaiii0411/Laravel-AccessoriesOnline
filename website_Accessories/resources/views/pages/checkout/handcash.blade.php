@extends('layout')
@section('content')
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Thanh toán</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{URL::to('/trangChu')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thanh toán giỏ hàng</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- checkout area start -->
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>Cảm ơn bạn đã đặt hàng</h3> 
                            <h3>Chúng tôi sẽ liên hệ với bạn sớm nhất!</h3>             
                                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
@endsection