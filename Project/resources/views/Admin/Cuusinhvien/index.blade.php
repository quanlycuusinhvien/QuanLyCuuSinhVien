@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ THÔNG TIN CỰU SINH VIÊN</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('cuusinhvien/index_csv')}}"><i class="fa fa-graduation-cap"></i>Cựu sinh viên</a></li>
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
                            {{--<a type="button" data-toggle="modal" data-target="#modal-import"--}}
                               {{--class="btn btn-primary pull-right" style="margin-left: 5px"><i--}}
                                    {{--class="fa  fa-download pull-left "></i>Import File</a>--}}
                            <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px"
                                    data-toggle="modal" data-target="#modal-import">
                                <i class="fa  fa-download pull-left "></i>Thêm DSSV
                            </button>
                            <a href="{{route('cuusinhvien/them')}}" class="btn btn-success pull-right"
                               style="margin-left: 5px"><i
                                    class="fa fa-user-plus pull-left "></i>Thêm mới</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên cựu sinh viên</th>
                                <th>Phái</th>
                                <th>SĐT gia đình</th>
                                <th>SĐT cá nhân</th>
                                <th>Email</th>
                                <th>Mã lớp</th>
                                <th>Tên Lớp</th>
                                <th>Tình trạng</th>
                                <th>Lý do</th>
                                <th>Danh hiệu</th>
                                <th style="min-width: 50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data_csv as $key => $value)
{{--                                {{dd($value)}}--}}
                                <tr>
                                    <td>{{$value->student_code}}</td>
                                    <td>{{$value->fullname}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->family_phone}}</td>
                                    <td>{{$value->personal_phone}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->homeroom_code}}</td>
                                    <td>{{$value->homeroom_name}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->reason}}</td>
                                    <td>{{$value->degree}}</td>
                                    <td>
                                        <a href="{{Route('cuusinhvien/sua',$value->student_code)}}" class="btn btn-sm btn-warning pull-right"
                                           style="font-size: 9px;padding: 4px 8px;margin-left: 2px ;margin-right: 2px ;">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <a href="{{Route('cuusinhvien/xem',$value->student_code)}}" class="btn btn-sm btn-info pull-right"
                                           style="font-size: 9px;padding: 4px 12px;">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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
            document.getElementById("btn_csv").className += " active";
        };
    </script>
@endsection

