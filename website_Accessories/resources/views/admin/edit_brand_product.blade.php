@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-white">Quản lý thương hiệu</h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Cập nhật thương hiệu</li>
      </ol>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                <h5 class="m-b-0">CẬP NHẬT THƯƠNG HIỆU</h5>
                </div>
                <div class="card-body">
                    @foreach($edit_brand_product as $key => $edit_value)
                <form action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post" class="form-horizontal form-bordered">
                    {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Tên thương hiệu</label>
                        <div class="col-md-9">
                        <input name="brand_product_name" value="{{ $edit_value->brand_name }}" placeholder="" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Hiển thị</label>
                        <div class="col-md-9">
                        <select name="brand_product_status" class="form-control custom-select">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Mô tả thương hiệu</label>
                        <div class="col-md-9">
                        <textarea name="brand_product_desc" value="{{ $edit_value->brand_desc }}" class="form-control" type="text"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="offset-sm-3 col-md-9">
                                <button type="submit" name="update_brand_product" class="btn btn-rounded btn-info">Cập nhật danh mục</button>
                            </div>
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