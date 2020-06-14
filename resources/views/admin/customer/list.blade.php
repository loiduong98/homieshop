@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Giá gốc</th>
                                <th>Giá khuyến mãi</th>
                                <th>Hình ảnh</th>
                                <th>Ẩn/Hiện</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $p) 
                                <tr class="odd gradeX" align="center">
                                <td>{{$p->id_product}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->description}}</td>
                                <td>{{$p->unit_price}}</td>
                                <td>{{$p->promotion_price}}</td>
                                <td><img src="upload/product/{{$p->image}}" width="150" height="200"></td>
                                <td>{{$p->new}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$p->id_product}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$p->id_product}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection