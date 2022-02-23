@extends('layout')
@section('content')
            <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Đăng Nhập</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Đăng Nhập</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>Đăng nhập</h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4>Đăng ký</h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="{{URL::to('/login-customer')}}" method="POST">
                                            {{csrf_field()}}
                                                <input type="text" name="email_account" placeholder="Email" />
                                                <input type="password" name="password_account" placeholder="Mật khẩu" />
                                                <div class="button-box">
                                                    <button type="submit"><span>Đăng nhập</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="{{URL::to('/add-customer')}}" method="POST">
                                            {{csrf_field()}}
                                                <input type="text" name="customer_name" placeholder="Họ và tên" />
                                                <input type="password" name="customer_password" placeholder="Mật khẩu" />
                                                <input name="customer_email" placeholder="Email" type="email" />
                                                <input type="text" name="customer_phone" placeholder="Số điện thoại" />
                                                <div class="button-box">
                                                    <button type="submit"><span>Đăng ký</span></button>
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
        <!-- login area end -->
@endsection