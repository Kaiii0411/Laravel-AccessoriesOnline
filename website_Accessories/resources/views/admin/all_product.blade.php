@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý sản phẩm</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Liệt kê sản phẩm</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">     
        <div class="info-box">
        <h4 class="text-white">LIỆT KÊ SẢN PHẨM</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
        <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Mã sản phẩm</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Hình sản phẩm</th>
                      <th>Danh mục</th>
                      <th>Thương hiệu</th>
                      <th>Hiển thị</th>
                      <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($all_product as $key => $pro)
                      <tr>
                        <td>{{$pro->product_id}}</td>
                        <td>{{$pro->product_name}}</td>
                        <td>{{$pro->product_price}}</td>
                        <td><img src="public/upload/product/{{$pro->product_image}}" height="100" width="150"></td>
                        <td>{{$pro->category_name}}</td>
                        <td>{{$pro->brand_name}}</td>
                        <td>
                          <?php
                            if($pro->product_status==0){
                              ?>
                              <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"><span></a>
                              <?php
                            } else {
                              ?>
                              <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"><span></a>
                              <?php
                            }
                          ?>
                        </td>
                        <td>
                            <a href ="{{URL::to('/edit-product/'.$pro->product_id)}}" type="button" class="btn btn-rounded btn-success">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')" href ="{{URL::to('/delete-product/'.$pro->product_id)}}" type="button" class="btn btn-rounded btn-danger">Xóa</a>
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