@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ THÔNG TIN SINH VIÊN</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('sinhvien/index_sv')}}"><i class="fa fa-graduation-cap"></i>Cựu sinh viên</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    @include('Admin/sinhvien/importexcel')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>QUẢN LÝ THÔNG TIN SINH VIÊN</B></h3>
                        <div class="box-header pull-right">
                            {{--<a type="button" data-toggle="modal" data-target="#modal-import"--}}
                            {{--class="btn btn-primary pull-right" style="margin-left: 5px"><i--}}
                            {{--class="fa  fa-download pull-left "></i>Import File</a>--}}
                            <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px"
                                    data-toggle="modal" data-target="#modal-import-sv">
                                <i class="fa  fa-download pull-left "></i>Thêm DSSV
                            </button>
                            {{--<a href="{{route('sinhvien/them')}}" class="btn btn-success pull-right"--}}
                            {{--style="margin-left: 5px"><i--}}
                            {{--class="fa fa-user-plus pull-left "></i>Thêm mới--}}
                            {{--</a>--}}
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên sinh viên</th>
                                <th>Phái</th>
                                <th>SĐT gia đình</th>
                                <th>SĐT cá nhân</th>
                                <th>Email</th>
                                <th>Mã lớp</th>
                                <th>Tên Lớp</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                    <td>{{$value->student_code}}</td>
                                    <td>{{$value->fullname}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->family_phone}}</td>
                                    <td>{{$value->personal_phone}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->homeroom_code}}</td>
                                    <td>{{$value->homeroom_name}}</td>
                                    <td>
                                        <a href="{{Route('sinhvien/sua',$value->student_code)}}" class="btn btn-sm btn-warning pull-right"
                                           style="font-size: 9px;padding: 4px 8px;margin-left: 2px ;margin-right: 2px ;">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <a href="{{Route('sinhvien/xem',$value->student_code)}}" class="btn btn-sm btn-info pull-right"
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
            document.getElementById("btn_sv").className += " active";
        };
    </script>
@endsection

