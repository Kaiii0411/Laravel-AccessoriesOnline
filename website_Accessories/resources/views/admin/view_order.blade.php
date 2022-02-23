@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý hóa đơn</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Quản lý hóa đơn</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">     
        <div class="info-box">
        <h4 class="text-white">THÔNG TIN KHÁCH HÀNG</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
        <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$order_by_id->customer_name}}</td>
                        <td>{{$order_by_id->customer_phone}}</td>
                        <td>{{$order_by_id->shipping_address}}</td>
                      </tr>
                    </tbody>
                    </table>
        </div>
    </div>
    </div>

    <div class="content">     
        <div class="info-box">
            <h4 class="text-white">LIỆT KÊ CHI TIẾT ĐƠN HÀNG</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tên sản phẩm</th>
                      <th>Số lượng</th> 
                      <th>Giá</th> 
                      <th>Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$order_by_id->product_name}}</td>
                        <td>{{$order_by_id->product_sales_quantity}}</td>
                        <td>{{$order_by_id->product_price}}</td>
                        <td>{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content --> 
</div>
@endsection