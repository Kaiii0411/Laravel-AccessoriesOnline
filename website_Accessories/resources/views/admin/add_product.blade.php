@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý sản phẩm</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Thêm sản phẩm</li>
      </ol>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                <h5 class="m-b-0">THÊM SẢN PHẨM</h5>
                </div>
                <div class="card-body">
                <form action="{{URL::to('/save-product')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Tên sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_name" placeholder="" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Hình ảnh sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_image" placeholder="" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Mô tả sản phẩm</label>
                        <div class="col-md-9">
                        <textarea name="product_desc" class="form-control" type="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nội dung sản phẩm</label>
                        <div class="col-md-9">
                        <textarea name="product_content" class="form-control" type="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Danh mục sản phẩm</label>
                        <div class="col-md-9">
                        <select name="product_cate" class="form-control custom-select">
                        @foreach($cate_product as $key =>$cate)
                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Thương hiệu sản phẩm</label>
                        <div class="col-md-9">
                        <select name="product_brand" class="form-control custom-select">
                        @foreach($brand_product as $key =>$brand)
                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Giá sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_price" placeholder="" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Hiển thị</label>
                        <div class="col-md-9">
                        <select name="product_status" class="form-control custom-select">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="offset-sm-3 col-md-9">
                            <button type="submit" name="add_product" class="btn btn-rounded btn-info">Thêm danh mục</button>                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /.content --> 
</div>        
@endsection