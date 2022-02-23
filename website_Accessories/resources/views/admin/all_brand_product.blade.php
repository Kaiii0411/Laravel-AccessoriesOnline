@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản Lý Thương Hiệu</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Liệt Kê Thương Hiệu</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">     
        <div class="info-box">
        <h4 class="text-white">LIỆT KÊ THƯƠNG HIỆU SẢN PHẨM</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
        <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Mã thương hiệu</th>
                      <th>Tên thương hiệu</th>
                      <th>Hiển thị</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($all_brand_product as $key => $brand_pro)
                      <tr>
                        <td>{{$brand_pro->brand_id}}</td>
                        <td>{{$brand_pro->brand_name}}</td>
                        <td>
                          <?php
                            if($brand_pro->brand_status==0){
                              ?>
                              <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"><span></a>
                              <?php
                            } else {
                              ?>
                              <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"><span></a>
                              <?php
                            }
                          ?>
                        </td>
                        <td>
                            <a href ="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" type="button" class="btn btn-rounded btn-success">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa thương hiệu này?')" href ="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" type="button" class="btn btn-rounded btn-danger">Xóa</a>
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