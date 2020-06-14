@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài viết
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã tin</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $n) 
                                <tr class="odd gradeX" align="center">
                                <td>{{$n->id_news}}</td>
                                <td>{{$n->title}}</td>
                                <td>{{$n->content}}</td>
                                <td><img src="upload/news/{{$n->image}}" width="150" height="200"></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{$n->id_news}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{$n->id_news}}">Edit</a></td>
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