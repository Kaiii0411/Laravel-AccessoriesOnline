@extends('layout')
@section('content')
<div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="{{asset('public/frontend/assets/images/hero/bg/hero-bg-1.webp')}}">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category">Chào Mừng Bạn Tới H-Mart</span>
                                        <h2 class="title-1">Phụ Kiện <br>
                                        Thông Minh <br>
                                         Cho Nhà Của Bạn </h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{asset('public/frontend/assets/images/hero/inner-img/hero-1-1.webp')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="{{asset('public/frontend/assets/images/hero/bg/hero-bg-1.webp')}}">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                    <span class="category">Chào Mừng Bạn Tới H-Mart</span>
                                        <h2 class="title-1">Phụ Kiện <br>
                                        Thông Minh <br>
                                         Cho Nhà Của Bạn </h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{asset('public/frontend/assets/images/hero/inner-img/hero-1-2.webp')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
</div>
        <!-- Hero/Intro Slider End -->
        <!-- Banner Area Start -->
        <div class="banner-area style-one pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-banner nth-child-1">
                            <img src="{{asset('public/frontend/assets/images/banner/3.webp')}}" alt="">
                            <div class="banner-content nth-child-1">
                                <h3 class="title">Đồng Hồ Thông Minh <br>
                                Dành Cho Bạn</h3>
                                <span class="category">Chỉ Từ 500.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px ">
                            <img src="{{asset('public/frontend/assets/images/banner/4.webp')}}" alt="">
                            <div class="banner-content nth-child-2">
                                <h3 class="title">Tai Nghe</h3>
                                <span class="category">Chỉ Từ 200.000 VND</span>
                            </div>
                        </div>
                        <div class="single-banner nth-child-2">
                            <img src="{{asset('public/frontend/assets/images/banner/5.webp')}}" alt="">
                            <div class="banner-content nth-child-3">
                                <h3 class="title">Điện Thoại</h3>
                                <span class="category">Chỉ Từ 6.900.000 VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Hero/Intro Slider Start -->
        <!-- Banner Area End -->
        <!-- Product Area Start -->
        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tab Start -->
                        <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                            <ul class="product-tab-nav nav justify-content-start align-items-center">
                                @foreach($category_name as $key => $name)
                                <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#newarrivals">{{$name->category_name}}</button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content mt-60px">
                            <!-- 1st tab start -->
                            <div class="tab-pane fade show active" id="newarrivals">
                                <div class="row mb-n-30px">
                                    @foreach($category_by_id as $key => $product)
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="Product" />
                                                    <img class="hover-image" src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">{{number_format($product->product_price).' '.'VND'}}</span>
                                                </span>
                                            </div>
                                            <div class="actions">
                                            <h5 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">Xem Chi Tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
@endsection