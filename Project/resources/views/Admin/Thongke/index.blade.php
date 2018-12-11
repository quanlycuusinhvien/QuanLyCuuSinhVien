@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ THỐNG KÊ</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('thongke/index')}}"><i class="fa fa-graduation-cap"></i>Thống kê</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>QUẢN LÝ THỐNG KÊ</B></h3>
                        <div class="box-header pull-right col-sm-8" style="padding-right: 0px">
                            <div style="padding-top: 10px;padding-left: 50px " class="col-sm-7">
                                <div class="form-group">
                                    <label for="loaithongke" class="col-sm-4 control-label">Loại thống kê: </label>
                                    <div class="col-sm-4">
                                        <select id="loaithongke" style="width: 15em">
                                            <option></option>
                                            <option>Thống kê thông tin khảo sát</option>
                                            <option>Thống kê thông tin việc làm</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="loaithongke" class="col-sm-4 control-label">Học Kỳ: </label>
                                    <div class="col-sm-4">
                                        <select id="hk" style="width: 15em">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="loaithongke" class="col-sm-4 control-label">Niên khóa: </label>
                                    <div class="col-sm-4">
                                        <select id="nk" style="width: 15em">
                                            <option></option>
                                            <option>2016-2017</option>
                                            <option>2017-2018</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4 pull-right" style="padding-right: 0px;margin-right: 0px">
                                <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px"
                                        data-toggle="modal" data-target="#modal-import">
                                    <i class="fa   fa-file-excel-o pull-left "></i>Export File
                                </button>
                                <a href="{{route('cuusinhvien/them')}}" class="btn btn-success pull-right"
                                   style="margin-left: 5px"><i
                                        class="fa  fa-bar-chart-o pull-left "></i>Thống kê
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>MSV</th>
                                <th>Tên sinh viên</th>
                                <th>Phái</th>
                                <th>Ngày sinh</th>
                                <th>Ngành</th>
                                <th>Khóa</th>
                                <th>SĐT cá nhân</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>B1400703</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Nam</td>
                                <td>11/10/1195</td>
                                <td>Kỹ thuật phần mềm</td>
                                <td>40</td>
                                <td>0336090892</td>
                                <td>locb140703@student.ctu.edu.vn</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info pull-right"
                                       style="font-size: 9px;padding: 4px 12px;">
                                        <i class="fa fa-info"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>B1400704</td>
                                <td>Nguyễn Văn an</td>
                                <td>Nam</td>
                                <td>11/11/1196</td>
                                <td>Kỹ thuật phần mềm</td>
                                <td>40</td>
                                <td>0336090892</td>
                                <td>locb140703@student.ctu.edu.vn</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info pull-right"
                                       style="font-size: 9px;padding: 4px 12px;">
                                        <i class="fa fa-info"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>B1400705</td>
                                <td>Nguyễn Văn ngà</td>
                                <td>Nam</td>
                                <td>11/10/1196</td>
                                <td>Kỹ thuật phần mềm</td>
                                <td>40</td>
                                <td>0336090892</td>
                                <td>locb140703@student.ctu.edu.vn</td>
                                <td>
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
            document.getElementById("btn_thongke").className += " active";
        };
    </script>
@endsection

