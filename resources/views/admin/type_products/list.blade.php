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
                                <th>Mã loại sản phẩm</th>
                                <th>Tên loại sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th>Ẩn/Hiện</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type_products as $tp) 
                                <tr class="odd gradeX" align="center">
                                <td>{{$tp->id_typeproduct}}</td>
                                <td>{{$tp->name}}</td>
                                <td>{{$tp->description}}</td>
                                <td><img src="upload/type_products/{{$tp->image}}" width="150" height="200"></td>
                                <td>{{$tp->new}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/type_products/delete/{{$tp->id_typeproduct}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/type_products/edit/{{$tp->id_typeproduct}}">Edit</a></td>
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