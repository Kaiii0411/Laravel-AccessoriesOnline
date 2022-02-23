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
        <h4 class="text-white">LIỆT KÊ ĐƠN HÀNG</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
        <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tên người đặt</th>
                      <th>Tổng giá tiền</th> 
                      <th>Tình trạng</th> 
                      <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($all_order as $key => $order)
                      <tr>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->order_total}}</td>
                        <td>{{$order->order_status}}</td>
                        <td>
                            <a href ="{{URL::to('/view-order/'.$order->order_id)}}" type="button" class="btn btn-rounded btn-success">Xem</a>
                        </td>
                      </tr>
                      @endforeach
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