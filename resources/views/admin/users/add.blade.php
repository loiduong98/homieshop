@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err){{$err}}<br>
                                @endforeach      
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name" placeholder="Mời bạn nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" class="form-control ckeditor" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá gốc</label>
                                <input class="form-control" name="unit_price" placeholder="Mời bạn nhập giá gốc" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="promotion_price" placeholder="Mời bạn nhập giá khuyến mãi" />
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Loại giá</label>
                                <select class="form-control" name="unit" id="">
                                    <option value="0">Giá gốc</option>
                                    <option value="1">Giá khuyến mãi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ẩn/hiện</label>
                                <label class="radio-inline">
                                    <input name="new" value="0" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input name="new" value="1" type="radio">Ẩn
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Đặt lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection