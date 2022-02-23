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
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>Thông tin gửi hàng</h3>
                            <div class="row">
                                <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                                {{csrf_field()}}

                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Họ và tên</label>
                                        <input name="shipping_name" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Địa chỉ</label>
                                        <input name="shipping_address" class="billing-address" placeholder="" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Phone</label>
                                        <input name="shipping_phone" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Email</label>
                                        <input name="shipping_email" type="text" />
                                    </div>
                                </div> 
                                <div class="additional-info-wrap">
                                <div class="additional-info">
                                    <label>Ghi chú</label>
                                    <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng của bạn"></textarea>
                                </div>
                            </div>
                            </div>
                                <div class="your-order-area">
                                <div class="Place-order mt-25">
                                    <input type="submit" name="send_order" class="btn-hover" value="Gửi thông tin"></input>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
@endsection