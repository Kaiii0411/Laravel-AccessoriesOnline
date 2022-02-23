@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý danh mục</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Liệt kê danh mục</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">     
        <div class="info-box">
        <h4 class="text-white">LIỆT KÊ DANH MỤC SẢN PHẨM</h4>
        <!-- <p>Liệt kê danh mục sản phẩm</p> -->
        <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Mã danh mục</th>
                      <th>Tên danh mục</th>
                      <th>Hiển thị</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($all_category_product as $key => $cate_pro)
                      <tr>
                        <td>{{$cate_pro->category_id}}</td>
                        <td>{{$cate_pro->category_name}}</td>
                        <td>
                          <?php
                            if($cate_pro->category_status==0){
                              ?>
                              <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"><span></a>
                              <?php
                            } else {
                              ?>
                              <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"><span></a>
                              <?php
                            }
                          ?>
                        </td>
                        <td>
                            <a href ="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" type="button" class="btn btn-rounded btn-success">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" href ="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" type="button" class="btn btn-rounded btn-danger">Xóa</a>
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