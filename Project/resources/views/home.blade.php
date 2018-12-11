@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>Trang chủ</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{Route('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    <div class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-primary" style="background: white;padding: 5px;">
            <h3 style="color: darkblue">Tổng quan</h3>
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box  bg-green-gradient">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Thành viên</p>
                        </div>
                        <div class="icon" style="top: 1px;">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm... <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue-gradient">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Bài đăng</p>
                        </div>
                        <div class="icon" style="top:1px;">
                            <i class="ion ion-android-document"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm... <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow-gradient">
                        <div class="inner">
                            <h3>49</h3>
                            <p>Sự Kiện</p>
                        </div>
                        <div class="icon" style="top: 1px;">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm... <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red-gradient">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Thông báo</p>
                        </div>
                        <div class="icon" style="top: 1px;">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm... <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- /.row -->
        <!--Thống kế sinh viên -->

        <div class="box box-primary">
            <h3 style="color: darkblue">Thống kê số lượng thành viên</h3>
            <div class="box-body">
                <div id="barChart" style="width: auto; height: 350px;"></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!--Lích sử hoat động của người dùng-->
        <div class="box box-primary" style="padding: 5px">
            <h3 style="color: darkblue">Quản trị viên</h3>
            <div style="padding: 5px">
                <table id="quantrivien" class="table table-bordered table-striped" style="font-size: 13px;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Cán Bộ</th>
                        <th>Tên Cán bộ</th>
                        <th>Chức vụ</th>
                        <th>Phân quyền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>0121981</td>
                        <td>Nguyễn Văn Lộc</td>
                        <td>Nhân viên văn phòng</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>0121981</td>
                        <td>Nguyễn Văn Lộc</td>
                        <td>Nhân viên văn phòng</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>0121981</td>
                        <td>Nguyễn Văn Lộc</td>
                        <td>Nhân viên văn phòng</td>
                        <td>Admin</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Main row -->

        <!-- /.row (main row) -->
    </div>
@endsection
@section('custom_js')
    <script>
        $(function () {
            $('#quantrivien').DataTable()
        })
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Năm', 'Cựu sinh viên', 'Giảng viên', 'Người dùng khác'],
                ['2009', 950, 54, 35],
                ['2010', 893, 52, 95],
                ['2011', 752, 62, 145],
                ['2012', 1098, 57, 230],
                ['2013', 902, 50, 152],
                ['2014', 893, 49, 295],
                ['2015', 1170, 54, 250],
                ['2016', 1120, 57, 315],
                ['2017', 1108, 57, 254],
                ['2018', 1204, 56, 582]
            ]);

            var options = {
                chart: {
                    title: 'Biểu đồ thống kê sô lượng thành viên trong 10 năm',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('barChart'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

    <script>
        window.onload = function () {
            document.getElementById("btn_trangchu").className += " active";
        };
    </script>
@endsection
