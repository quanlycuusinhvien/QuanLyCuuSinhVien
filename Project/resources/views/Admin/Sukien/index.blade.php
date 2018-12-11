@extends('container.Navigation')
@section('headercontent')
    <div class="content-header">
        <h1>
            AIM
            <small>QUẢN LÝ SỰ KIỆN</small>
        </h1>
        <ol class="breadcrumb pull-right">
            <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="{{route('cuusinhvien/index_csv')}}"><i class="fa fa-graduation-cap"></i>Quản lý sự kiện</a></li>
        </ol>
    </div>
@endsection
@section('bodycontent')
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" style="color: #0b58a2"><B>Duyệt sự kiên</B></h3>
                        <div class="box-header pull-right">
                            <a href="{{url('Admin/Cuusinhvien/them')}}" class="btn btn-success pull-left"
                               style="margin-right: 5px"><i
                                    class="fa fa-user-plus pull-left "></i>Duyệt</a>
                            <a href="#" class="btn btn-danger pull-right"><i class="fa fa-user-times pull-left"></i>Xóa</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index_duyet" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Sự kiên</th>
                                <th>Thời gian</th>
                                <th>Địa điểm</th>
                                <th>Người tạo</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>

                                <td>Nguyễn Văn Lộc</td>
                                <td>Chưa duyệt</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Xóa
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Duyệt
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>

                                <td>Nguyễn Văn Lộc</td>
                                <td>Chưa duyệt</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Xóa
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Duyệt
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>

                                <td>Nguyễn Văn Lộc</td>
                                <td>Chưa duyệt</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Xóa
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success pull-right "
                                       style="font-size: 9px;padding: 4px 9px ;">
                                        <i class=""></i>Duyệt
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
                        <h3 class="box-title" style="color: #0b58a2"><B>QUẢN LÝ SỰ KIỆN</B></h3>
                        <div class="box-header pull-right">
                            <a href="{{url('Admin/Cuusinhvien/them')}}" class="btn btn-success pull-left"
                               style="margin-right: 5px"><i
                                    class="fa fa-user-plus pull-left "></i>Thêm mới</a>
                            <a href="#" class="btn btn-danger pull-right"><i class="fa fa-user-times pull-left"></i>Xóa</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="index" class="table table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Sự kiên</th>
                                <th>Thời gian</th>
                                <th>Địa điểm</th>
                                <th>Người tạo</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
                            <tr>
                                <td>1</td>
                                <td style="max-width: 250px">Thảo luận chuyên đề khởi nghiệp</td>
                                <td>2018/10/10</td>
                                <td>Hội trường Rùa khu 2 đại học cần thơ</td>
                                <td>Nguyễn Văn Lộc</td>
                                <td>Đã duyệt</td>
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
            $('#index_duyet').DataTable()
        })
        $(function () {
            $('#index').DataTable()
        })
    </script>
    <script>
        window.onload = function () {
            document.getElementById("btn_sukien").className += " active";
        };
    </script>
@endsection
