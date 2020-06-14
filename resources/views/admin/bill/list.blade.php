@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa đơn
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã hóa đơn</th>
                                <th>Ngày đặt hàng</th>
                                <th>Tổng tiền</th>
                                <th>Hình thức thanh toán</th>
                                <th>Ghi chú</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bills as $b) 
                                <tr class="odd gradeX" align="center">
                                <td>{{$b->id_bills}}</td>
                                <td>{{$b->date_order}}</td>
                                <td>{{$b->total}}</td>
                                <td>{{$b->payment}}</td>
                                <td>{{$b->note}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bill/delete/{{$b->id_bills}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bill/edit/{{$b->id_bills}}">Edit</a></td>
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