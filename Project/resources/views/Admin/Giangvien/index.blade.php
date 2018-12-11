@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ THÔNG TIN CỰU SINH VIÊN</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('cuusinhvien/index')}}"><i class="fa fa-graduation-cap"></i>Cựu sinh viên</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    @include('Admin/Cuusinhvien/importexcel')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>QUẢN LÝ THÔNG TIN CỰU SINH VIÊN</B></h3>
                        <div class="box-header pull-right">
                            <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px"
                                    data-toggle="modal" data-target="#modal-import">
                                <i class="fa  fa-download pull-left "></i>Import File
                            </button>
                            <a href="{{route('cuusinhvien/them')}}" class="btn btn-success pull-right"
                               style="margin-left: 5px"><i
                                    class="fa fa-user-plus pull-left "></i>Thêm mới</a>
                            <a href="#" class="btn btn-danger pull-right"><i class="fa fa-user-times pull-left"></i>Xóa</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên giảng viên</th>
                                <th>Phái</th>
                                <th>SĐT cá nhân</th>
                                <th>Email</th>
                                <th>Bộ môn</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

@endsection
@section('custom_js')
    <script>
        $(function () {
            $('#index').DataTable()
        })
    </script>
    <script>
        window.onload = function () {
            document.getElementById("btn_qltv").className += " active";
            document.getElementById("btn_qltv").className += " menu-open";
            document.getElementById("btn_qlgv").className += " active";
        };
    </script>
@endsection

