<div class="modal" tabindex="-1" role="dialog" id="modal-them-ks">
    <div class="modal-dialog" role="document">
        <form action="{{Route('themks')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-sm-9" style="margin-left: 0px;padding-left: 0px">
                        <h4 class="modal-title" style="color: darkblue"><b>Thêm Đợt Khảo Sát Mới</b></h4>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="session_code" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Đợt tốt nghiệp: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input  class="col-sm-7" type="text" name="session_code" id="session_code">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="hk" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Học kỳ: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="text" name="hk" id="hk">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="hk" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Học kỳ: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="text" name="hk" id="hk">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="nk" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Niên khóa: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="text" name="nk" id="nk">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="session_name" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;"></label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="date" name="session_name" id="session_name">
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-3">
                                    <label for="started" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Ngày bắt đầu: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="date" name="started" id="started">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <label for="ended" class="col-sm-3 control-label"
                                           style="padding: 0px 10px 0px 0px;width: auto;">Ngày kết thúc: </label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="col-sm-7" type="date" name="ended" id="ended">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </div>
    </div>
    </form>
</div>
</div>
