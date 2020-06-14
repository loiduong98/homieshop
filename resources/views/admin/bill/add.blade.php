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
                    <form action="admin/bill/add" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Ngày đặt hàng</label>
                                <input class="form-control" type="date" name="date_order" placeholder="Mời bạn nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Tổng tiền</label>
                                <input class="form-control" type="text" name="total" placeholder="Mời bạn nhập tổng tiền"/>
                            </div>
                            <div class="form-group">
                                <label>Hình thức thanh toán</label>
                                <select class="form-control" name="payment" id="">
                                    <option value="COD">Thanh toán khi nhận hàng</option>
                                    <option value="Banking">Thanh toán qua thẻ ngân hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea class="form-control" name="note" id="demo" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm hóa đơn</button>
                            <button type="reset" class="btn btn-default">Đặt lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection