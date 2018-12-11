<div class="modal" tabindex="-1" role="dialog" id="modal-import">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-sm-9" style="margin-left: 0px;padding-left: 0px">
                        <h4 class="modal-title" style="color: darkblue" ><b>Import Danh Sách Cựu Sinh Viên</b></h4>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="chonfile" class="col-sm-3 control-label"
                               style="padding: 0px 10px 0px 0px;width: auto;">Chọn
                            file Excel chứa danh sách cựu sinh viên:</label>
                        <input type="file" name="file" id="chonfile" accept=".xls, .xlsx">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>
