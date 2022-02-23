@extends('layout')
@section('content')
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Liên Hệ</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{URL::to('/trangChu')}}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Liên Hệ</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Contact Area Start -->
        <div class="contact-area">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form">
                                <div class="contact-title mb-30">
                                    <h2 class="title">Gửi Yêu Cầu</h2>
                                </div>
                                <form class="contact-form-style" id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input name="name" placeholder="Tên*" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="email" placeholder="Email*" type="email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="subject" placeholder="Chủ đề*" type="text" />
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <textarea name="message" placeholder="Your Message*"></textarea>
                                            <button class="btn btn-primary" type="submit">Gửi</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-info">
                                <div class="single-contact">
                                    <div class="icon-box">
                                        <img src="{{asset('public/frontend/assets/images/icons/contact-1.png')}}" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Địa chỉ</h5>
                                        <p>Địa Chỉ Của Bạn Ở Đây. <br>
                                        300A QL1A</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="icon-box">
                                        <img src="{{asset('public/frontend/assets/images/icons/contact-2.png')}}" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Số Điện Thoại</h5>
                                        <p><a href="tel:0123456789">+039 640 9106</a></p>
                                    </div>
                                </div>
                                <div class="single-contact m-0">
                                    <div class="icon-box">
                                        <img src="{{asset('public/frontend/assets/images/icons/contact-3.png')}}" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Email</h5>
                                        <p><a href="mailto:demo@example.com">ng.ducnghia0411@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->
        <!-- map Area Start -->
        <div class="contact-map">
            <div id="mapid">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- map Area End -->
@endsection

