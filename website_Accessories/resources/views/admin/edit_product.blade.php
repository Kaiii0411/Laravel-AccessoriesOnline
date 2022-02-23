@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý sản phẩm</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Cập nhật sản phẩm</li>
      </ol>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                <h5 class="m-b-0">CẬP NHẬT SẢN PHẨM</h5>
                </div>
                <div class="card-body">
                @foreach($edit_product as $key => $pro)
                <form action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Tên sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_name" placeholder="" class="form-control" type="text" value="{{$pro->product_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Hình ảnh sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_image" placeholder="" class="form-control" type="file" value="{{$pro->product_image}}">
                        <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" height="100" width="150">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Mô tả sản phẩm</label>
                        <div class="col-md-9">
                        <textarea name="product_desc" class="form-control" type="text">{{$pro->product_desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nội dung sản phẩm</label>
                        <div class="col-md-9">
                        <textarea name="product_content" class="form-control" type="text">{{$pro->product_content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Danh mục sản phẩm</label>
                        <div class="col-md-9">
                        <select name="product_cate" class="form-control custom-select">
                        @foreach($cate_product as $key =>$cate)
                            @if($cate->category_id == $pro->category_id)
                                <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                            @else
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                            @endif
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Thương hiệu sản phẩm</label>
                        <div class="col-md-9">
                        <select name="product_brand" class="form-control custom-select">
                        @foreach($brand_product as $key =>$brand)
                            @if($brand->brand_id == $pro->brand_id)
                                <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                            @else
                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                            @endif
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Giá sản phẩm</label>
                        <div class="col-md-9">
                        <input name="product_price" placeholder="" class="form-control" type="text" value="{{$pro->product_price}}">
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
                            <button type="submit" name="add_product" class="btn btn-rounded btn-info">Cập nhật danh mục</button>                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /.content --> 
</div>        
@endsection