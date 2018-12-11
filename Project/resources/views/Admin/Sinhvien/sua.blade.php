@extends('container.Navigation')
@section('pageheader')
    <style type="text/css">
        .form-group {
            margin-bottom: 10px;
        }

        .col-sm-9 {
            padding-left: 5px;
        }
    </style>
@endsection
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ CỰU SINH VIÊN</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('sinhvien/index_sv')}}"><i class="fa fa-graduation-cap"></i>Quản lý sinh viên</a>
            </li>
            <li><a href="{{route('sinhvien/sua',$data_sinhvien[0]->student_code)}}"><i class="fa  fa-user-plus"></i>Chỉnh
                    sửa thông tin sinh viên</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 style="color: darkblue;font-weight: bold; text-align: center">Chỉnh sửa thông tin sinh
                            viên</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="row">
                                <!-- start form left -->
                                <div class="col-sm-6">
                                    <h4 class="box-title" style="color: darkblue;font-weight: bold; text-align: center">
                                        Thông tin sinh viên</h4>
                                    <!-- Mã sinh viên -->
                                    <div class="form-group">
                                        <label for="student_code" class="col-sm-3 control-label">Mã sinh viên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="student_code"
                                                   name="student_code"
                                                   value="{{$data_sinhvien[0]->student_code}}" readonly>
                                        </div>
                                    </div>
                                    <!-- Tên sinh viên -->
                                    <div class="form-group">
                                        <label for="fullname" class="col-sm-3 control-label">Tên sinh viên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                   value="{{$data_sinhvien[0]->fullname}}" readonly>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="student_email" class="col-sm-3 control-label">Email <i>(Sinh
                                                viên)</i></label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="student_email"
                                                   value="{{$data_sinhvien['0']->student_email}}" readonly>
                                        </div>
                                    </div>
                                    <!-- Phái -->
                                    <div class="form-group">
                                        <label for="gender" class="col-sm-3 control-label">Phái</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="gender"
                                                   value="{{$data_sinhvien['0']->gender}}" readonly>
                                            {{--<select type="combobox" class="form-control" id="phai" name="gioitinh">--}}
                                            {{--<option>Nam</option>--}}
                                            {{--<option>Nữ</option>--}}
                                            {{--</select>--}}
                                        </div>
                                    </div>
                                    <!-- Ngày sinh -->
                                    <div class="form-group">
                                        <label for="date_of_birth" class="col-sm-3 control-label">Ngày sinh</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="date_of_birth"
                                                   name="date_of_birth"
                                                   value="{{$data_sinhvien['0']->date_of_birth}}" readonly>
                                        </div>
                                    </div>
                                    <!-- Dân tộc-->
                                    <div class="form-group">
                                        <label for="minority_name" class="col-sm-3 control-label">Dân tộc</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="minority_name"
                                                   name="minority_name"
                                                   value="{{$data_sinhvien['0']->minority_name}}" readonly>
                                            {{--<select type="combobox" class="form-control" id="id_dantoc"--}}
                                            {{--cdname="id_dantoc">--}}
                                            {{--<option>Dân tộc...</option>--}}
                                            {{--@foreach($data_dantoc as $key => $value)--}}
                                            {{--<option value="{{$value->id}}">--}}
                                            {{--{{$value->minority_name}}--}}
                                            {{--</option>--}}
                                            {{--@endforeach--}}
                                            {{--</select>--}}
                                        </div>
                                    </div>
                                    <!--Điện thoại gia đình -->
                                    <div class="form-group">
                                        <label for="family_phone" class="col-sm-3 control-label">SĐT gia
                                            đình</label>
                                        <div class="col-sm-9">
                                            <input id="family_phone" type="text" class="form-control"
                                                   data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                                   data-mask="" name="family_phone"
                                                   value="{{$data_sinhvien['0']->family_phone}}">
                                        </div>
                                    </div>
                                    <!--Điện thoại cá nhân -->
                                    <div class="form-group">
                                        <label for="personal_phone" class="col-sm-3 control-label">SĐT cá nhân</label>
                                        <div class="col-sm-9">
                                            <input id="personal_phone" type="text" class="form-control"
                                                   data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                                   data-mask="" name="personal_phone"
                                                   value="{{$data_sinhvien['0']->personal_phone}}">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email"
                                                   value="{{$data_sinhvien['0']->email}}">
                                        </div>
                                    </div>
                                    <!-- Địa chỉ-->
                                    <div class="form-group">
                                        <label for="family_address" class="col-sm-3 control-label">Địa chỉ Gia
                                            đình</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="family_address"
                                                   value="{{$data_sinhvien['0']->family_address}}">
                                        </div>
                                    </div>
                                    <!-- Địa chỉ-->
                                    <div class="form-group">
                                        <label for="current_address" class="col-sm-3 control-label">Địa chỉ liên
                                            hệ</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="current_address"
                                                   value="{{$data_sinhvien['0']->current_address}}">
                                        </div>
                                    </div>
                                    {{--<!-- Quận/Huyện-->--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label for="quanhuyen" class="col-sm-3 control-label">Quận/Huyện</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                    {{--<select type="combobox" class="form-control" id="id_quanhuyen"--}}
                                    {{--name="id_quanhuyen">--}}
                                    {{--Dữ liệu sẽ truyền tại đây--}}
                                    {{--</select>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Tỉnh thành-->--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label for="tinhthanh" class="col-sm-3 control-label">Tỉnh thành</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                    {{--<select type="combobox" class="form-control" id="tinhthanh_id"--}}
                                    {{--onchange="getHuyen()"--}}
                                    {{--name="tinhthanh_id">--}}
                                    {{--<option>Tỉnh/Thành phố...</option>--}}
                                    {{--@foreach($data_tinhthanh as $key => $value)--}}
                                    {{--<option--}}
                                    {{--value="{{$value->id}}">{{$value->city_name}}</option>--}}
                                    {{--@endforeach--}}
                                    {{--</select>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <!-- End form left   -->

                                <!-- start form right -->
                                <div class="col-sm-6">
                                    <h4 class="box-title" style="color: darkblue;font-weight: bold; text-align: center">
                                        Thông tin lớp học</h4>
                                    <!--Mã lớp-->
                                    <div class="form-group">
                                        <label for="homeroom_code" class="col-sm-3 control-label">Mã lớp</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="homeroom_code"
                                                   name="homeroom_code"
                                                   value="{{$data_sinhvien['0']->homeroom_code}}" readonly>
                                        </div>
                                    </div>
                                    <!--Tên lớp-->
                                    <div class="form-group">
                                        <label for="homeroom_name" class="col-sm-3 control-label">Tên lớp</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="homeroom_name"
                                                   name="homeroom_name"
                                                   value="{{$data_sinhvien['0']->homeroom_name}}" readonly>
                                        </div>
                                    </div>
                                    <!--Mã chuyên ngành-->
                                    <div class="form-group">
                                        <label for="speciality_code" class="col-sm-3 control-label">Mã chuyên
                                            ngành</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="speciality_code"
                                                   name="speciality_code"
                                                   value="{{$data_sinhvien['0']->speciality_code}}" readonly>
                                        </div>
                                    </div>
                                    <!--Tên chuyên ngành-->
                                    <div class="form-group">
                                        <label for="speciality_name" class="col-sm-3 control-label">Tên chuyên
                                            ngành</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="speciality_name"
                                                   name="speciality_name"
                                                   value="{{$data_sinhvien['0']->speciality_name}}" readonly>
                                        </div>
                                    </div>
                                    <!--Mã ngành-->
                                    <div class="form-group">
                                        <label for="major_code" class="col-sm-3 control-label">Mã ngành</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="major_code" name="major_code"
                                                   value="{{$data_sinhvien['0']->major_code}}" readonly>
                                        </div>
                                    </div>
                                    <!-- Tên ngành-->
                                    <div class="form-group">
                                        <label for="major_name" class="col-sm-3 control-label">Tên ngành</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="major_name" name="major_name"
                                                   value="{{$data_sinhvien['0']->major_name}}" readonly>
                                            {{--<select type="combobox" class="form-control" id="id_nganh"--}}
                                            {{--onchange="getChuyennganh()" name="id_nganh">--}}
                                            {{--<option>Tên ngành...</option>--}}
                                            {{--@foreach($data_nganh as $key => $value)--}}
                                            {{--<option--}}
                                            {{--value="{{$value->nganh_id}}">{{$value->nganh_ten}}--}}
                                            {{--</option>--}}
                                            {{--@endforeach--}}
                                            {{--</select>--}}
                                        </div>
                                    </div>
                                    <!--mã Khoa-->
                                    <div class="form-group">
                                        <label for="college_code" class="col-sm-3 control-label">Mã Khoa</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="college_code"
                                                   name="college_code"
                                                   value="{{$data_sinhvien['0']->college_code}}" readonly>
                                            {{--<select type="combobox" class="form-control" id="teacher_id"--}}
                                            {{--name="teacher_id">--}}
                                            {{--Dữ liệu sẽ truyền tại đây--}}
                                            {{--</select>--}}
                                        </div>
                                    </div>
                                    <!--tên Khoa-->
                                    <div class="form-group">
                                        <label for="major_name" class="col-sm-3 control-label">Tên Khoa</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="college_name"
                                                   name="college_name"
                                                   value="{{$data_sinhvien['0']->college_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="box-title" style="color: darkblue;font-weight: bold; text-align: center">
                                        Trạng Thái của sinh viên
                                    </h4>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">Tình Trạng Sinh
                                            viên</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="status" name="status"
                                                   value="{{$data_sinhvien['0']->status}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reason" class="col-sm-3 control-label">Lý do</label>
                                        <div class="col-sm-9">
                                            <input type="Text" class="form-control" id="reason"
                                                   name="reason"
                                                   value="{{$data_sinhvien['0']->reason}}">
                                        </div>
                                    </div>
                                    <!-- End form left   -->
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right"
                                        style="margin-left: 10px;width: 120px">
                                    <i class="fa fa-edit pull-left "></i>Chỉnh sửa
                                </button>
                                <a class="btn btn-warning pull-right" href="{{route('sinhvien/index_sv')}}">Thoát</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        function getHuyen() {
            var city_id = $('#tinhthanh_id').val();
            var url = '{{route('district',['id'=> ':slug'])}}';
            url = url.replace(':slug', city_id);
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    _token: '{{csrf_token()}}',
                },
                success: function (res) {
                    if (res.status) {
                        chitiet = res.data;
                        var htmlTable = '';
                        $("#id_quanhuyen").innerHTML = '';
                        chitiet.forEach(function (element) {
                            htmlTable = htmlTable
                                + ' <option value="' + element.id + '">' + element.district_name + '</option>'
                        });
                        $("#id_quanhuyen").html(htmlTable);
                    }
                }
            });
        }
    </script>
    {{--<script>--}}
    {{--function getChuyennganh() {--}}
    {{--var id = $('#id_nganh').val();--}}
    {{--var url = '{{route('chuyennganh',['id'=> ':slug'])}}';--}}
    {{--url = url.replace(':slug', id);--}}
    {{--$.ajax({--}}
    {{--type: 'GET',--}}
    {{--url: url,--}}
    {{--data: {--}}
    {{--_token: '{{csrf_token()}}',--}}
    {{--},--}}
    {{--success: function (res) {--}}
    {{--if (res.status) {--}}
    {{--chitiet = res.data;--}}
    {{--var htmlTable = '';--}}
    {{--$("#id_chuyennganh").innerHTML = '';--}}
    {{--chitiet.forEach(function (element) {--}}
    {{--htmlTable = htmlTable--}}
    {{--+ ' <option value="' + element.chuyennganh_id + '">' + element.chuyennganh_ten + '</option>'--}}
    {{--});--}}
    {{--$("#id_chuyennganh").html(htmlTable);--}}
    {{--}--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--</script>--}}
    <script>
        window.onload = function () {
            document.getElementById("btn_sv").className += " active";
        };
    </script>
@endsection
