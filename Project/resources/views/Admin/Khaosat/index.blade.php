@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ Khảo Sát</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('khaosat')}}"><i class="fa fa-graduation-cap"></i>Quản lý Khảo sát</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    @include('Admin/Khaosat/them_dot_ks')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>Quản lý đợt khảo sát</B></h3>
                        <div class="box-header pull-right">
                            <button type="button" class="btn btn-success pull-right" style="margin-left: 5px"
                                    data-toggle="modal" data-target="#modal-them-ks">
                                Thêm mới
                            </button>
                            {{--<a href="#" class="btn btn-success pull-left"--}}
                               {{--style="margin-right: 5px"><i--}}
                                    {{--class="fa fa-user-plus pull-left "></i></a>--}}
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dotks" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Học Kỳ</th>
                                <th>Niên khóa</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Thời gian kết thúc</th>
                                <th>Trạng thái</th>
                                <th style="min-width: 70px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>HK1</td>
                                <td>2017-2018</td>
                                <td>30/1/2018</td>
                                <td>30/3/2018</td>
                                <td>Đã xong</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-warning pull-right"
                                       style="font-size: 9px;padding: 4px 8px;margin-left: 2px ;margin-right: 2px ;">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info pull-right"
                                       style="font-size: 9px;padding: 4px 12px;">
                                        <i class="fa fa-info"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>Quản lý câu hỏi khảo sát</B></h3>
                        <div class="box-header pull-right">
                            <a href="#" class="btn btn-success pull-left"
                               style="margin-right: 5px"><i
                                    class="fa fa-user-plus pull-left "></i>Thêm mới</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Câu hỏi</th>
                                <th>Loại câu hỏi</th>
                                <th>Câu trả lời</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>bạn có việc làm chưa?</td>
                                <td>select</td>
                                <td><select id="nk" style="width: 15em">
                                        <option>có</option>
                                        <option>chưa
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-warning pull-right"
                                       style="font-size: 9px;padding: 4px 8px;margin-left: 2px ;margin-right: 2px ;">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info pull-right"
                                       style="font-size: 9px;padding: 4px 12px;">
                                        <i class="fa fa-info"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@section('custom_js')
    <script>
        $(function () {
            $('#dotks').DataTable()
        })
        $(function () {
            $('#index').DataTable()
        })
    </script>
    <script>
        window.onload = function () {
            document.getElementById("btn_ks").className += " active";
        };
    </script>
@endsection
