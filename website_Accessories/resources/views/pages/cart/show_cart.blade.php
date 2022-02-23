@extends('layout')
@section('content')
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Giỏ Hàng Của Bạn</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{URL::to('/trangChu')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Giỏ hàng</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
                <?php
                    use Gloudemans\Shoppingcart\Facades\Cart;
                    $content = Cart::content();
                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng phụ</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($content as $v_content)
                                        <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                                    {{csrf_field()}}
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="{{URL::to('/public/upload/product/'.$v_content->options->image)}}" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$v_content->name}}</a></td>
                                            <td class="product-price-cart"><span class="amount">{{number_format($v_content->price).' '.'VND'}}</span></td>
                                            <td class="product-quantity">
                                                        <input class="cart-plus-minus-box" type="text" name="cart_quantity" value="{{$v_content->qty}}" />
                                                        <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control"/>
                                            </td>
                                            <td class="product-subtotal">
                                                <?php
                                                    $subtotal = $v_content->price * $v_content->qty;
                                                    echo number_format($subtotal).' '.'VND';
                                                ?> 
                                            </td>
                                            <td class="product-remove">
                                                <button type="submit" name="update_qty"><i class="fa fa-pencil"></i></button>
                                                <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times" ></i></a>
                                            </td>
                                        </tr>
                                        </form>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">

                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Thanh toán giỏ hàng</h4>
                                    </div>
                                    <h5>Tiền hàng <span>{{Cart::priceTotal(0, ',' , '.').' '.'VND'}}</span></h5>
                                    <h5>Thuế <span>{{Cart::tax(0, ',' , '.').' '.'VND'}}</span></h5>
                                    <div class="total-shipping">
                                    <h5>Phí giao hàng <span> Miễn phí</span></h5>
                                    </div>
                                    <h4 class="grand-totall-title">Tổng<span>{{Cart::total(0, ',' , '.').' '.'VND'}}</span></h4>
                                    <?php
                                        use Illuminate\Support\Facades\Session;
                                        $customer_id = Session::get('customer_id');
                                        if($customer_id!=NULL)
                                        {     
                                    ?>
                                    <a href="{{URL::to('/checkout')}}">Thanh toán</a>

                                    <?php
                                        }else{
                                    ?>
                                    <a href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
@endsection