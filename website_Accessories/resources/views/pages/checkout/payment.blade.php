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
                        <?php
                            use Gloudemans\Shoppingcart\Facades\Cart;
                            $content = Cart::content();
                        ?>
                            <h3>Giỏ hàng của bạn</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>Sản phẩm</li>
                                            <li>Giá</li>
                                        </ul>
                                    </div>
                                    @foreach($content as $v_content)
                                    <div class="your-order-middle">
                                        <ul>
                                            <li><span class="order-middle-left">{{$v_content->name}}</span> <span
                                                class="order-price">{{number_format($v_content->price).' '.'VND'}} </span></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Phí giao hàng</li>
                                            <li>Miễn phí</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Tổng tiền</li>
                                            <li>{{Cart::total(0, ',' , '.').' '.'VND'}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div id="faq" class="panel-group">
                                        <h4 class="panel-title"><a data-bs-toggle="collapse" aria-expanded="false" class="collapsed">Chọn hình thức thanh toán</a></h4>
                                        <form method="POST" action="{{URL::to('/order-place')}}">
                                        {{csrf_field()}}
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <input class="checkout-toggle2 w-auto h-auto" type="checkbox" value="1" name="payment_option"/>
                                                    <label>Trả bằng thẻ ATM</label>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                <input class="checkout-toggle2 w-auto h-auto" type="checkbox" value="2" name="payment_option"/>
                                                    <label>Trả bằng tiền mặt</label>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                <input class="checkout-toggle2 w-auto h-auto" type="checkbox" value="3" name="payment_option"/>
                                                    <label>Thanh toán thẻ ghi nợ</label>
                                                </div>
                                            </div>
                                            <div class="Place-order mt-25">
                                                <input type="submit" name="send_order_place" class="btn-hover" value="Đặt hàng">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
@endsection