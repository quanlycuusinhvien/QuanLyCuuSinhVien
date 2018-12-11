@extends('container.Navigation')
@section('headercontent')
    <style>
        .alert {
            margin: 5px 5px 10px 0px;
            padding: 5px;
        }
    </style>
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ FILE MẪU</small>
        </h1>

        @if (\Session::has('success'))
            <div class="alert alert-success fade in pull-right" style="width: 200px" id="close">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('fail'))
            <div class="alert alert-warning fade in pull-right" style="width: 200px" id="close">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    <li>{!! \Session::get('fail') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('trung'))
            <div class="alert alert-warning fade in pull-right" style="width: 200px" id="close">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    <li>{!! \Session::get('trung') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('xoa_success'))
            <div class="alert alert-success fade in pull-right" style="width: 200px" id="close">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    <li>{!! \Session::get('xoa_success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('xoa_fail'))
            <div class="alert alert-warning fade in pull-right" style="width: 200px" id="close">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    <li>{!! \Session::get('xoa_fail') !!}</li>
                </ul>
            </div>
        @endif
        <ol class="breadcrumb pull-right">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('quanlyfile/index')}}"><i class="fa fa-graduation-cap"></i>Quản lý biểu mẫu</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    @include('Admin/file/importfile')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>QUẢN LÝ THÔNG TIN CỰU SINH VIÊN</B></h3>
                        <div class="box-header pull-right">
                            <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px"
                                    data-toggle="modal" data-target="#modal-import-file">
                                <i class="fa  fa-download pull-left "></i>Thêm File
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên file</th>
                                <th style="text-align: center">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$stt+=1}}</td>
                                    <td>{{$value->file_name}}</td>
                                    <td style="text-align: center">
                                        <a href="{{route('Download',['file_name'=>$value->file_name])}}"
                                           class="btn btn-sm btn-success "
                                           style="font-size: 9px;padding: 4px;">
                                            <i class="fa fa-download pull-left"></i> Download
                                        </a>
                                        {{--<a href="{{route('Load',['file_name'=>$value->file_name])}}"--}}
                                           {{--class="btn btn-sm btn-info "--}}
                                           {{--style="font-size: 9px;padding: 4px 18px;margin-left: 2px">--}}
                                            {{--<i class="fa fa-info pull-left"></i> Xem--}}
                                        {{--</a>--}}
                                        <a href="{{route('Delete_file',['file_name'=>$value->file_name])}}"
                                           class="btn btn-sm btn-danger "
                                           style="font-size: 9px;padding: 4px 10px;margin-left: 2px ;margin-right: 2px ;">
                                            <i class="fa fa-edit pull-left"></i> Xóa file
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
            document.getElementById("btn_quanlyfile").className += " active";
        };
    </script>

@endsection

