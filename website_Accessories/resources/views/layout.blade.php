<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-Mart</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/assets/images/favicon.ico')}}" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/font.awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/jquery-ui.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
        <header>
            <!-- Header top area start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="welcome-text">
                                <p>Vận Chuyển Hoàn Toàn Miễn Phí Trên Toàn Thế Giới</p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <?php
                                        use Illuminate\Support\Facades\Session;
                                        $customer_id = Session::get('customer_id');
                                        $shipping_id = Session::get('shipping_id');
                                        if($customer_id!=NULL && $shipping_id==NULL)
                                        {     
                                    ?>
                                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-credit-card-alt"></i> Thanh toán</a></li>

                                    <?php
                                        }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                    ?>
                                    <li><a href="{{URL::to('/payment')}}"><i class="fa fa-credit-card-alt"></i> Thanh toán</a></li>
                                    <?php
                                        }else{
                                    ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-credit-card-alt"></i> Thanh toán</a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        if($customer_id!=NULL)
                                        {     
                                    ?>
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-user"></i> Đăng xuất</a></li>

                                    <?php
                                        }else{
                                    ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Đăng nhập</a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{URL::to('/trangChu')}}"><img src="{{asset('public/frontend/assets/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                                    <input type="text" name="keywords_submit" placeholder="Tìm kiếm" />
                                    <button type="submit" name="search_items"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge End -->
                                <a href="{{URL::to('/show-cart')}}" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li><a href="{{URL::to('/trangChu')}}">Trang chủ</a>
                                </li>
                                <li class="dropdown "><a href="#">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="#">Danh mục sản phẩm
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                @foreach($category as $key =>$cate)
                                                <li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate ->category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="#">Thương hiệu sản phẩm
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                @foreach($brand as $key =>$brand)
                                                <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{$brand ->brand_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{URL::to('/veChungtoi')}}">Về chúng tồi</a></li>
                                <li><a href="{{URL::to('/lienHe')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Wishlist Start -->
        <!-- OffCanvas Wishlist End -->
        <!-- OffCanvas Cart Start -->
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <!-- OffCanvas Menu End -->
        @Yield('content');
        <!-- Fashion Area End -->
        <!-- Feature product area start -->

        <!-- Feature product area End -->
        <!-- Testimonial area start -->

        <!-- Testimonial area end-->
        <!-- Brand area start -->
        <div class="brand-area pt-100px pb-100px">
            <div class="container">
                <div class="brand-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="{{asset('public/frontend/assets/images/partner/1.png')}}" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="{{asset('public/frontend/assets/images/partner/2.png')}}" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="{{asset('public/frontend/assets/images/partner/3.png')}}" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="{{asset('public/frontend/assets/images/partner/4.png')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="{{URL::to('/trangChu')}}"><img src="{{asset('public/frontend/assets/images/logo/footer-logo.png')}}" alt=""></a>
                                    </div>
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Thông Tin Liên Hệ</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Tên: Nguyễn Đức Nghĩa</p>
                                        <p class="phone">Phone:<a href="tel:0396409106"> 0396409106</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> toshiro4112@gmail.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="payment-mth"><a href="#"><img class="img img-fluid" src="{{asset('public/frontend/assets/images/icons/payment.png')}}" alt="payment-image"></a></div>
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2021 <strong>Hmart</strong><i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>

    
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/zoom-image/1.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/zoom-image/2.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/zoom-image/3.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/zoom-image/4.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/zoom-image/5.webp')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/small-image/1.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/small-image/2.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/small-image/3.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/small-image/4.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('public/frontend/assets/images/product-image/small-image/5.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="{{asset('public/frontend/assets/images/product-image/1.webp')}}" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="{{asset('public/frontend/assets/images/product-image/1.webp')}}" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="{{asset('public/frontend/assets/images/product-image/1.webp')}}" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="{{asset('public/frontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/scrollUp.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/plugins/mailchimp-ajax.js')}}"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>
</body>

</html>