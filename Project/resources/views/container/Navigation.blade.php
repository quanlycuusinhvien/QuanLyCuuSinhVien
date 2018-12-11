<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quanlythongtincuusinhvien</title>
    <!-- responsive screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url ('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url ('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="{{url ('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url ('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url ('dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url ('bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url ('bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="{{url ('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url ('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url ('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="{{url ('bower_components/myfont/font.css')}}">
    @Yield('pageheader')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="font-size: x-small">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('home')}}" class="logo">
            <!-- mini logo -->
            <span class="logo-mini"><b>A</b>IM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>AIM</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only"></span>
            </a>
            <!-- User Account -->  <!--style can be found in dropdown.less -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Văn Lộc</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Avatar -->
                            <li class="user-header ">
                                <!-- Link anh avatar -->
                                <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                                <p style="font-size: 15px;">
                                    <b>Nguyễn Văn Lộc - Kỹ thuật phần mềm Khóa 40</b>
                                    <br>Member since Nov. 2014
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                {{--<div class="pull-left">--}}
                                    {{--<a href="#" class="btn btn-primary btn-flat ">Profile</a>--}}
                                {{--</div> --}}
                                <div class="pull-right">
                                    <a href="{{Route('dangxuat')}}" class="btn btn-danger btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Văn Lộc</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                </div>
            </div>

            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">QUẢN LÝ CỰU SINH VIÊN</li>
                <li id="btn_trangchu">
                    <a href="{{Route('home')}}" class="active">
                        <i class="fa fa-dashboard"></i>
                        <span>TRANG CHỦ</span>
                    </a>
                </li>
                <!-- Button Quản lý cựu sinh viên -->
                {{--<li class="treeview" id="btn_qltv">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-dashboard"></i> <span>QUẢN LÝ THÀNH VIÊN</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-left pull-right"></i>--}}
                        {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li id="btn_qlcsv">--}}
                            {{--<a href="{{route('cuusinhvien/index')}}">--}}
                                {{--<i class="fa fa-circle-o"></i>CỰU SINH VIÊN--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li id="btn_qlgv">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-circle-o"></i>GIẢNG VIÊN--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li id="btn_qlnd">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-circle-o"></i>NGƯỜI DÙNG KHÁC--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- Button import sinh viên-->
                <li id="btn_sv">
                    <a href="{{route('sinhvien/index_sv')}}">
                        <i class="fa fa-newspaper-o"></i>
                        <span>QUẢN LÝ SINH VIÊN</span>
                    </a>
                </li>
                <!-- Button  cựu sinh viên-->
                <li id="btn_csv">
                    <a href="{{route('cuusinhvien/index_csv')}}">
                        <i class="fa fa-newspaper-o"></i>
                        <span>QUẢN LÝ CỰU SINH VIÊN</span>
                    </a>
                </li>
                <!-- Button Quản lý Bài Đăng-->
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-newspaper-o"></i>--}}
                        {{--<span>QUẢN LÝ BÀI ĐĂNG</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<!-- Button Quản lý Sự kiện-->--}}
                {{--<li id="btn_sukien">--}}
                    {{--<a href="{{route('sukien')}}">--}}
                        {{--<i class="fa  fa-calendar-minus-o"></i>--}}
                        {{--<span>QUẢN LÝ SỰ KIỆN </span>--}}
                    {{--</a>--}}
                {{--</li>--}}

            <!-- Button Quản lý khảo sát-->
                <li id="btn_ks">
                    <a href="{{route('khaosat')}}">
                        <i class="fa fa-bar-chart"></i>
                        <span>QUẢN LÝ KHẢO SÁT</span>
                    </a>
                </li>

                <!-- Button Quản lý THỐNG KÊ-->
                <li id="btn_thongke">
                    <a href="{{route('thongke/index')}}">
                        <i class="fa fa-bar-chart"></i>
                        <span>QUẢN LÝ THỐNG KÊ </span>
                    </a>
                </li>

                <!-- Button Quản lý Biểu mẫu-->
                <li id="btn_quanlyfile">
                    <a href="{{route('quanlyfile/index')}}">
                        <i class="fa fa-file-archive-o"></i>
                        <span>QUẢN LÝ BẢNG MẪU</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Page content start-->
    <div class="content-wrapper">
    @Yield('headercontent')
    <!-- Body Main content start -->
    @Yield('bodycontent')
    <!-- Body Main content end -->
    </div>
    <!-- Page content end-->
    <!-- Page Footer start-->
    <footer class="main-footer" style="padding: 15px 15px 0px 15px; background: #ecf0f5;border: none;">
        <div class="box box-primary" style="text-align: left;padding: 5px;margin-bottom: 0px;">
            <a href="{{url('http://cit.ctu.edu.vn/')}}" target="_blank">Khoa Công nghệ Thông tin & Truyền thông - Trường
                Đại học Cần
                Thơ</a>
            <p style="margin: 0px;">
                <b>Địa chỉ:</b>Khu 2, đường 3/2, Phường Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ, Việt Nam
                <br>
                <b>Điện thoại:</b> 84 0292 3831301
                <br>
                <b>Fax:</b> 84 0292 3830841
                <br>
                <b>Email:</b> webmaster@cit.ctu.edu.vn
                <br>
                <b>Fanpage: </b>
                <a href="{{url('https://www.facebook.com/groups/372705796142698/')}}" target="_blank">https://www.facebook.com/khoa
                    CNTT $ TT</a>
            </p>
        </div>
    </footer>
    <!-- Page Footer end -->
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{url ('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url ('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url ('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url ('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url ('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url ('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url ('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url ('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url ('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url ('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url ('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url ('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url ('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url ('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url ('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url ('dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{url ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{url('bower_components/chart/chart.js')}}"></script>

@Yield('custom_js')

</body>

