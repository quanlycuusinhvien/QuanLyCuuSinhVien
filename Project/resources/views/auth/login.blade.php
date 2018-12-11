<header>
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
</header>
<body class="hold-transition login-page" style="background-image: url('http://localhost:8000/QuanLyCuuSinhVien/Project/public/Avatar/khu2-khoa.png');background-repeat: no-repeat;background-size: cover;" >
<div class="login-box" style="width: 60%;border: solid 2px darkblue">
    <div class="login-logo">
        <a href="http://cit.ctu.edu.vn"  style="text-align: center;color: blue"><b>KHOA CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box " style="width:70%;">
        <h2 style="text-align: center;font-weight: bold"> Đăng Nhập</h2>
        <h4 style="text-align: center;font-weight: bold;">Admin</h4>
        @if (session('status_success'))
            <div class="alert alert-success">
                {{ session('status_success') }}
            </div>
        @endif
        @if (session('status_error'))
            <div class="alert alert-danger">
                {{ session('status_error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{Route('dangnhap')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Tên tài khoản" style="border: solid 1px white;border-radius:10px">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" style="border: solid 1px white;border-radius:10px">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="border: solid 1px white;border-radius:10px">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>

@section('custom_js')

@endsection
