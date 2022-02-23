@extends('layout')
@section('content')

        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Về Chúng Tôi</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{URL::to('/trangChu')}}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Về Chúng Tôi</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- About section Start -->
        <div class="about-area pt-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-wrapper text-center">
                            <div class="about-contant">
                                <h2 class="title">
                                    <span>Mua Sắm Thông Minh </span>
                                    Cùng Thiết Bị Thông Minh
                                </h2>
                            </div>
                            <div class="promo-video">
                                <img src="{{asset('public/frontend/assets/images/about/promo-video-img.webp')}}" alt="">
                                <a href="https://youtu.be/7rmQIzbgpoA" class="venobox overlay-box" data-vbtype="video"><span
                                    class="fa fa-play"><i class="ripple"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About section End -->
        <!-- Team Area Start -->
        <div class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title line-height-1">Thành Viên Nhóm</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-n-30px">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-lm-30px mb-lg-30px mb-md-30px">
                        <!-- Single Team -->
                        <div class="team-wrapper ">
                            <div class="team-image overflow-hidden">
                                <img src="{{asset('public/frontend/assets/images/team/1.webp')}}" alt="">
                                <ul class="team-social d-flex">
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
                            <div class="team-inner">
                                <div class="team-content">
                                    <h6 class="title">Đức Nghĩa 1</h6>
                                    <span class="sub-title">Nhóm Trưởng</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-lm-30px mb-lg-30px mb-md-30px">
                        <!-- Single Team -->
                        <div class="team-wrapper">
                            <div class="team-image overflow-hidden">
                                <img src="{{asset('public/frontend/assets/images/team/2.webp')}}" alt="">
                                <ul class="team-social d-flex">
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
                            <div class="team-inner">
                                <div class="team-content">
                                    <h6 class="title">Đức Nghĩa 2</h6>
                                    <span class="sub-title">Thành viên nhóm</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 mb-lm-30px ">
                        <!-- Single Team -->
                        <div class="team-wrapper">
                            <div class="team-image overflow-hidden">
                                <img src="{{asset('public/frontend/assets/images/team/3.webp')}}" alt="">
                                <ul class="team-social d-flex">
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
                            <div class="team-inner">
                                <div class="team-content">
                                <h6 class="title">Đức Nghĩa 3</h6>
                                    <span class="sub-title">Thành viên nhóm</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End -->
        <!-- Feature Area Srart -->
        <div class="feature-area pt-100px pb-100px">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <!-- single item -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('public/frontend/assets/images/icons/1.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Miễn Phí Vận Chuyển</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('public/frontend/assets/images/icons/2.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Thanh Toán Bằng Thẻ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('public/frontend/assets/images/icons/3.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Dễ Dàng Đổi Trả</h4>
                            </div>
                        </div>
                        <!-- single item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->
        <!-- Testimonial area end-->
@endsection
