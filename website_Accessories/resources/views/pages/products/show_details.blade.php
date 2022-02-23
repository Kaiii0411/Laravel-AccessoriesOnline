@extends('layout')
@section('content')
<div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Chi Tiết Sản Phẩm</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Sản Phẩm</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Product Details Area Start -->
        @foreach($product_details as $key => $value)
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="{{URL::to('/public/upload/product/'.$value->product_image)}}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{URL::to('/save-cart')}}" method="POST">
                    {{csrf_field()}}
                        <div class="product-details-content quickview-content ml-25px">
                            <h2>{{$value->product_name}}</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">{{number_format($value->product_price).' '.'VND'}}</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mt-30px"></p>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0 mt-30px">
                                <span>Mã sản phẩm: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$value->product_id}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tình trạng: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Còn hàng </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Điều kiện: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Mới 100%</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Thương hiệu: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$value->brand_name}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Danh mục: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$value->category_name}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qty" min="1" value="1" />
                                    <input class="cart-plus-minus-box" type="hidden" name="productid_hidden" value="{{$value->product_id}}" />
                                </div>
                                <div class="pro-details-cart">
                                    <button type="submit" class="add-cart"> Thêm giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">Thông tin</button>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Mô tả</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details2" class="tab-pane">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <p>
                                            {!!$value->product_desc!!}
                                        </p>
                                    </div>
                                </div>
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>
                                            {!!$value->product_content!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Product Area Start -->
        <div class="product-area related-product">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Sản phẩm liên quan</h2>
                            <p>Có rất nhiều sản phẩm có liên quan đang chờ bạn!</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="new-product-slider swiper-container slider-nav-style-1">
                            <div class="swiper-wrapper">
                                @foreach($relate as $key =>$lienquan)
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{{URL::to('/public/upload/product/'.$lienquan->product_image)}}" alt="Product" />
                                                <img class="hover-image" src="{{URL::to('/public/upload/product/'.$lienquan->product_image)}}" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">{{$lienquan->product_name}}
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">{{number_format($lienquan->product_price).' '.'VND'}}</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <h5 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}">Xem Chi Tiết</a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
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
@endsection