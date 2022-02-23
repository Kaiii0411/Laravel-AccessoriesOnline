<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Quản trị viên</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{asset('public/backend/dist/bootstrap/css/bootstrap.min.css')}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('public/backend/dist/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/backend/dist/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/backend/dist/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('public/backend/dist/css/themify-icons/themify-icons.css')}}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="{{URL::to('admin')}}" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{{asset('public/backend/dist/img/logo-n.png')}}" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{{asset('public/backend/dist/img/logo.png')}}" alt=""></span> </a> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{asset('public/backend/dist/img/img1.jpg')}}" class="user-image" alt="User Image"> <span class="hidden-xs">Đức Nghĩa</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{asset('public/backend/dist/img/img1.jpg')}}" class="img-responsive" alt="User"></div>
                <p class="text-left">Đức Nghĩa <small>ducnghia@gmail.com</small> </p>
                <div class="view-link text-left"><a href="#">View Profile</a> </div>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> Thông tin cá nhân</a></li>
              <li><a href="#"><i class="icon-wallet"></i> Số dư</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Tin nhắn</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Cài đặt hồ sơ</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{URL::to('/logout')}}"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{asset('public/backend/dist/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Nguyễn Đức Nghĩa</p>
          <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CÁ NHÂN</li>
        <li class="active treeview"> <a href="{{URL::to('admin')}}"> <i class="fa fa-home"></i> <span>Trang chủ</span> <span class="pull-right-container"></span> </a>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-money"></i> <span>Đơn hàng</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-flag"></i> <span>Danh mục sản phẩm</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/add_category_product')}}">Thêm danh mục sản phẩm</a></li>
            <li><a href="{{URL::to('/all_category_product')}}">Liệt kê danh mục sản phẩm</a></li>          
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-bandcamp"></i> <span>Thương hiệu sản phẩm</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/add-brand-product')}}">Thêm thương hiệu sản phẩm</a></li>
            <li><a href="{{URL::to('/all-brand-product')}}">Liệt kê thương hiệu sản phẩm</a></li>          
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-mobile"></i> <span>Sản phẩm</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
            <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>          
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>
    @Yield('admin_content');
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.2</div>
    Copyright © 2017 Yourdomian. All rights reserved.</footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{{asset('public/backend/dist/js/jquery.min.js')}}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{asset('public/backend/dist/bootstrap/js/bootstrap.min.js')}}"></script> 

<!-- template --> 
<script src="{{asset('public/backend/dist/js/niche.js')}}"></script> 

<!-- Morris JavaScript --> 
<script src="{{asset('public/backend/dist/plugins/raphael/raphael-min.js')}}"></script> 
<script src="{{asset('public/backend/dist/plugins/morris/morris.js')}}"></script>
<script src="{{asset('public/backend/dist/plugins/functions/morris-init.js')}}"></script>
</body>
</html>
